<?php
 
namespace App\Command;
 
use App\Service\GetDataService;
use App\Service\RandomRandoService;
use App\Service\TwitterApiService;
use App\Service\TwitterFormatPostService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
 
class GreRandoBot extends Command
{
    private $getData;
    private $twitterApi;
    private $randomRando;
    private $twitterFormatPost;
    protected static $defaultName = 'bot:post';
 
    public function __construct(
        GetDataService $getData,
        TwitterApiService $twitterApi,
        RandomRandoService $randomRando,
        TwitterFormatPostService $twitterFormatPost
    ) {
        parent::__construct();
        $this->getData = $getData;
        $this->twitterApi = $twitterApi;
        $this->randomRando = $randomRando;
        $this->twitterFormatPost = $twitterFormatPost;
    }
 
    protected function configure()
    {
         
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $data = $this->getData->get();
        $random = $this->randomRando->choice($data);
        $post = $this->twitterFormatPost->format($random);
        $this->twitterApi->post($post);

        return Command::SUCCESS;
    }
}
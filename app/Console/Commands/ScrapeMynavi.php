<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapeMynavi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mynavi:shiina';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape Mynavi from shiina';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      echo 10 . PHP_EOL;
      $crawler = \Goutte::request('GET', 'https://html.duckduckgo.com/html/?q=hamster');
      $crawler->filter('.result__title .result__a')->each(function ($node) {
        dump($node->text());
      });
      //return view('welcome');
        return Command::SUCCESS;
    }
}

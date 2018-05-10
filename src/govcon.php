<?php
namespace GovCon;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GovCon extends Command{
    protected function configure(){
        $this->setName('gc:whatTime')
             ->setDescription('Menampilkan Waktu')
             ->setHelp('Help Menampilkan Waktu');
    }
    public function execute(InputInterface $input, OutputInterface $output){
        $now = new \DateTime();
        $output->writeln('Ini Jam'.$now->format('g:i a'));

    }
}








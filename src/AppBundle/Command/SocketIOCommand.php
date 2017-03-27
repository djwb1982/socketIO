<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/30
 * Time: 13:46
 */

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Doctrine\Common\Persistence\ObjectManager;
use Workerman\Worker;
use PHPSocketIO\SocketIO;

class SocketIOCommand extends ContainerAwareCommand {
    protected function configure()
    {
        $this
            // a good practice is to use the 'app:' prefix to group all your custom application commands
            ->setName('app:socketIO')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        $type = $input->getArgument('type');
//        $io = new SocketIO(2021);
//        $io->on('connection', function($socket)use($io){
//            $io->emit('chat message', '22222222');
//            $io->emit('chat message', json_encode(array('msg' =>'')));
//            $socket->on('message', function($msg)use($io){
//                $io->emit('chat message', '111111111');
//            });
//        });
//        Worker::runAll();
//        $socketPid = exec("pgrep -f /etc/init.d/socketio");
//        exec("kill -9 ".$socketPid);
//        $socketIOPid=exec("pgrep -f start_file=/vagrant_data/www/soketio/web/socketIO");
//        exec("kill -9 ".$socketIOPid);
//        $WorkManPid=exec("pgrep -f PHPSocketIO");
//        exec("kill -9 ".$WorkManPid);
//        exec("service socketio start");
//        echo '生成完毕！';die;
        exec("php /vagrant_data/www/soketio/web/socketIO start");
    }
}
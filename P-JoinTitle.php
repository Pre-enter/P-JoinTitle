<?php
/**
 * @name P-JoinTitle
 * @api 3.7.0
 * @version 0.0.1
 * @main P-Re\Main
 * @author P-Re
*/
namespace P-RE;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
//기본 플러그인 이벤트
use pocketmine\event\player\PlayerJoinEvent;
//플레이어 접속 이벤트
use pocketmine\Player;
//플레이어 이벤트
class P-JoinTitle extends PluginBase implements Listener{

    public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§b[ §f! §b] §fP-JoinTitle 작동준비 완료");
    }

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getName();
            $player->addTitle ("§b[ §f! §b] §fP-JoinTitle", $name . "§f님 접속을 환영합니다 !");
    }
}

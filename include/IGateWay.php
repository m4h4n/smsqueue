<?php
/**
 * Gateway interface
 * @author Juraj Puchk� - Devtech s.r.o. <jpuchky@devtech.cz>
 *
 */
interface IGateWay {
	public function sendMessage($toNumber,$message);
	public function processMessages();
}
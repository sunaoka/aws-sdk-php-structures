<?php

namespace Sunaoka\Aws\Structures\KinesisVideoWebRTCStorage\JoinStorageSession;

trait JoinStorageSessionTrait
{
    /**
     * @param JoinStorageSessionRequest $args
     * @return void
     */
    public function joinStorageSession(JoinStorageSessionRequest $args)
    {
        parent::joinStorageSession($args->toArray());
    }
}

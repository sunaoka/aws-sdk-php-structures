<?php

namespace Sunaoka\Aws\Structures\VoiceID\DeleteFraudster;

trait DeleteFraudsterTrait
{
    /**
     * @param DeleteFraudsterRequest $args
     * @return void
     */
    public function deleteFraudster(DeleteFraudsterRequest $args)
    {
        parent::deleteFraudster($args->toArray());
    }
}

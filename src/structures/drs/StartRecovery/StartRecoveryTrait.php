<?php

namespace Sunaoka\Aws\Structures\drs\StartRecovery;

trait StartRecoveryTrait
{
    /**
     * @param StartRecoveryRequest $args
     * @return StartRecoveryResponse
     */
    public function startRecovery(StartRecoveryRequest $args)
    {
        $result = parent::startRecovery($args->toArray());
        return new StartRecoveryResponse($result->toArray());
    }
}

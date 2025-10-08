<?php

namespace Sunaoka\Aws\Structures\FSx\StartMisconfiguredStateRecovery;

trait StartMisconfiguredStateRecoveryTrait
{
    /**
     * @param StartMisconfiguredStateRecoveryRequest $args
     * @return StartMisconfiguredStateRecoveryResponse
     */
    public function startMisconfiguredStateRecovery(StartMisconfiguredStateRecoveryRequest $args)
    {
        $result = parent::startMisconfiguredStateRecovery($args->toArray());
        return new StartMisconfiguredStateRecoveryResponse($result->toArray());
    }
}

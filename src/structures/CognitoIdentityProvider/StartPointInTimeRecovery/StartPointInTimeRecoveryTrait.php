<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StartPointInTimeRecovery;

trait StartPointInTimeRecoveryTrait
{
    /**
     * @param StartPointInTimeRecoveryRequest $args
     * @return StartPointInTimeRecoveryResponse
     */
    public function startPointInTimeRecovery(StartPointInTimeRecoveryRequest $args)
    {
        $result = parent::startPointInTimeRecovery($args->toArray());
        return new StartPointInTimeRecoveryResponse($result->toArray());
    }
}

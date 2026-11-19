<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\InitiatePointInTimeRecovery;

trait InitiatePointInTimeRecoveryTrait
{
    /**
     * @param InitiatePointInTimeRecoveryRequest $args
     * @return InitiatePointInTimeRecoveryResponse
     */
    public function initiatePointInTimeRecovery(InitiatePointInTimeRecoveryRequest $args)
    {
        $result = parent::initiatePointInTimeRecovery($args->toArray());
        return new InitiatePointInTimeRecoveryResponse($result->toArray());
    }
}

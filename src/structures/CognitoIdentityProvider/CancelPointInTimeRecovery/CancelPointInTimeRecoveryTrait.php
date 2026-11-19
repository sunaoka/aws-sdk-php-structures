<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CancelPointInTimeRecovery;

trait CancelPointInTimeRecoveryTrait
{
    /**
     * @param CancelPointInTimeRecoveryRequest $args
     * @return CancelPointInTimeRecoveryResponse
     */
    public function cancelPointInTimeRecovery(CancelPointInTimeRecoveryRequest $args)
    {
        $result = parent::cancelPointInTimeRecovery($args->toArray());
        return new CancelPointInTimeRecoveryResponse($result->toArray());
    }
}

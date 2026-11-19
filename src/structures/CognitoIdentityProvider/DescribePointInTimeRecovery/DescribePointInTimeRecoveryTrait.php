<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribePointInTimeRecovery;

trait DescribePointInTimeRecoveryTrait
{
    /**
     * @param DescribePointInTimeRecoveryRequest $args
     * @return DescribePointInTimeRecoveryResponse
     */
    public function describePointInTimeRecovery(DescribePointInTimeRecoveryRequest $args)
    {
        $result = parent::describePointInTimeRecovery($args->toArray());
        return new DescribePointInTimeRecoveryResponse($result->toArray());
    }
}

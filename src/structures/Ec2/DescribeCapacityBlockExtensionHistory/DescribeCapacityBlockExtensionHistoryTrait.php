<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionHistory;

trait DescribeCapacityBlockExtensionHistoryTrait
{
    /**
     * @param DescribeCapacityBlockExtensionHistoryRequest $args
     * @return DescribeCapacityBlockExtensionHistoryResponse
     */
    public function describeCapacityBlockExtensionHistory(DescribeCapacityBlockExtensionHistoryRequest $args)
    {
        $result = parent::describeCapacityBlockExtensionHistory($args->toArray());
        return new DescribeCapacityBlockExtensionHistoryResponse($result->toArray());
    }
}

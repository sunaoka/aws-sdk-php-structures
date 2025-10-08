<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForConsumer;

trait DescribeDataSharesForConsumerTrait
{
    /**
     * @param DescribeDataSharesForConsumerRequest $args
     * @return DescribeDataSharesForConsumerResponse
     */
    public function describeDataSharesForConsumer(DescribeDataSharesForConsumerRequest $args)
    {
        $result = parent::describeDataSharesForConsumer($args->toArray());
        return new DescribeDataSharesForConsumerResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForProducer;

trait DescribeDataSharesForProducerTrait
{
    /**
     * @param DescribeDataSharesForProducerRequest $args
     * @return DescribeDataSharesForProducerResponse
     */
    public function describeDataSharesForProducer(DescribeDataSharesForProducerRequest $args)
    {
        $result = parent::describeDataSharesForProducer($args->toArray());
        return new DescribeDataSharesForProducerResponse($result->toArray());
    }
}

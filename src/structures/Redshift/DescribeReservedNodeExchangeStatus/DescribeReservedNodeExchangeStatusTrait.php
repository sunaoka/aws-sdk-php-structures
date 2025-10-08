<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodeExchangeStatus;

trait DescribeReservedNodeExchangeStatusTrait
{
    /**
     * @param DescribeReservedNodeExchangeStatusRequest $args
     * @return DescribeReservedNodeExchangeStatusResponse
     */
    public function describeReservedNodeExchangeStatus(DescribeReservedNodeExchangeStatusRequest $args)
    {
        $result = parent::describeReservedNodeExchangeStatus($args->toArray());
        return new DescribeReservedNodeExchangeStatusResponse($result->toArray());
    }
}

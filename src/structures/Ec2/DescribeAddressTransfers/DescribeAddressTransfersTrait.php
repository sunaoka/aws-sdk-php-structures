<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddressTransfers;

trait DescribeAddressTransfersTrait
{
    /**
     * @param DescribeAddressTransfersRequest $args
     * @return DescribeAddressTransfersResponse
     */
    public function describeAddressTransfers(DescribeAddressTransfersRequest $args)
    {
        $result = parent::describeAddressTransfers($args->toArray());
        return new DescribeAddressTransfersResponse($result->toArray());
    }
}

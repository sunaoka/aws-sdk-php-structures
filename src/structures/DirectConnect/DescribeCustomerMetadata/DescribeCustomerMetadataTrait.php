<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeCustomerMetadata;

trait DescribeCustomerMetadataTrait
{
    /**
     * @return DescribeCustomerMetadataResponse
     */
    public function describeCustomerMetadata()
    {
        $result = parent::describeCustomerMetadata();
        return new DescribeCustomerMetadataResponse($result->toArray());
    }
}

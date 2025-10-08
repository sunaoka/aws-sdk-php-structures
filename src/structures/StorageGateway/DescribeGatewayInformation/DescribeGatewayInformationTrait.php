<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeGatewayInformation;

trait DescribeGatewayInformationTrait
{
    /**
     * @param DescribeGatewayInformationRequest $args
     * @return DescribeGatewayInformationResponse
     */
    public function describeGatewayInformation(DescribeGatewayInformationRequest $args)
    {
        $result = parent::describeGatewayInformation($args->toArray());
        return new DescribeGatewayInformationResponse($result->toArray());
    }
}

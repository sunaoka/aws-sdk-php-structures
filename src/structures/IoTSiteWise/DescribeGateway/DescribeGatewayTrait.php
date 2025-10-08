<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeGateway;

trait DescribeGatewayTrait
{
    /**
     * @param DescribeGatewayRequest $args
     * @return DescribeGatewayResponse
     */
    public function describeGateway(DescribeGatewayRequest $args)
    {
        $result = parent::describeGateway($args->toArray());
        return new DescribeGatewayResponse($result->toArray());
    }
}

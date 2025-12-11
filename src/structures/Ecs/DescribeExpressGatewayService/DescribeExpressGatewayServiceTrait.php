<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeExpressGatewayService;

trait DescribeExpressGatewayServiceTrait
{
    /**
     * @param DescribeExpressGatewayServiceRequest $args
     * @return DescribeExpressGatewayServiceResponse
     */
    public function describeExpressGatewayService(DescribeExpressGatewayServiceRequest $args)
    {
        $result = parent::describeExpressGatewayService($args->toArray());
        return new DescribeExpressGatewayServiceResponse($result->toArray());
    }
}

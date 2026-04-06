<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMeteringPolicy;

trait CreateTransitGatewayMeteringPolicyTrait
{
    /**
     * @param CreateTransitGatewayMeteringPolicyRequest $args
     * @return CreateTransitGatewayMeteringPolicyResponse
     */
    public function createTransitGatewayMeteringPolicy(CreateTransitGatewayMeteringPolicyRequest $args)
    {
        $result = parent::createTransitGatewayMeteringPolicy($args->toArray());
        return new CreateTransitGatewayMeteringPolicyResponse($result->toArray());
    }
}

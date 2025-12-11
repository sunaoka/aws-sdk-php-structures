<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayMeteringPolicy;

trait ModifyTransitGatewayMeteringPolicyTrait
{
    /**
     * @param ModifyTransitGatewayMeteringPolicyRequest $args
     * @return ModifyTransitGatewayMeteringPolicyResponse
     */
    public function modifyTransitGatewayMeteringPolicy(ModifyTransitGatewayMeteringPolicyRequest $args)
    {
        $result = parent::modifyTransitGatewayMeteringPolicy($args->toArray());
        return new ModifyTransitGatewayMeteringPolicyResponse($result->toArray());
    }
}

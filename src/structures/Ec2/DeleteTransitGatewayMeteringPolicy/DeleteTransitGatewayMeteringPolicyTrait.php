<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayMeteringPolicy;

trait DeleteTransitGatewayMeteringPolicyTrait
{
    /**
     * @param DeleteTransitGatewayMeteringPolicyRequest $args
     * @return DeleteTransitGatewayMeteringPolicyResponse
     */
    public function deleteTransitGatewayMeteringPolicy(DeleteTransitGatewayMeteringPolicyRequest $args)
    {
        $result = parent::deleteTransitGatewayMeteringPolicy($args->toArray());
        return new DeleteTransitGatewayMeteringPolicyResponse($result->toArray());
    }
}

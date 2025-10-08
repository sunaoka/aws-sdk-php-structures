<?php

namespace Sunaoka\Aws\Structures\Ec2\StartVpcEndpointServicePrivateDnsVerification;

trait StartVpcEndpointServicePrivateDnsVerificationTrait
{
    /**
     * @param StartVpcEndpointServicePrivateDnsVerificationRequest $args
     * @return StartVpcEndpointServicePrivateDnsVerificationResponse
     */
    public function startVpcEndpointServicePrivateDnsVerification(
        StartVpcEndpointServicePrivateDnsVerificationRequest $args,
    ) {
        $result = parent::startVpcEndpointServicePrivateDnsVerification($args->toArray());
        return new StartVpcEndpointServicePrivateDnsVerificationResponse($result->toArray());
    }
}

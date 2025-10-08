<?php

namespace Sunaoka\Aws\Structures\CloudFront\VerifyDnsConfiguration;

trait VerifyDnsConfigurationTrait
{
    /**
     * @param VerifyDnsConfigurationRequest $args
     * @return VerifyDnsConfigurationResponse
     */
    public function verifyDnsConfiguration(VerifyDnsConfigurationRequest $args)
    {
        $result = parent::verifyDnsConfiguration($args->toArray());
        return new VerifyDnsConfigurationResponse($result->toArray());
    }
}

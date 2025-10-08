<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachCertificateToDistribution;

trait AttachCertificateToDistributionTrait
{
    /**
     * @param AttachCertificateToDistributionRequest $args
     * @return AttachCertificateToDistributionResponse
     */
    public function attachCertificateToDistribution(AttachCertificateToDistributionRequest $args)
    {
        $result = parent::attachCertificateToDistribution($args->toArray());
        return new AttachCertificateToDistributionResponse($result->toArray());
    }
}

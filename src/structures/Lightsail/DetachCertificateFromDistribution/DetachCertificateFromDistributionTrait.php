<?php

namespace Sunaoka\Aws\Structures\Lightsail\DetachCertificateFromDistribution;

trait DetachCertificateFromDistributionTrait
{
    /**
     * @param DetachCertificateFromDistributionRequest $args
     * @return DetachCertificateFromDistributionResponse
     */
    public function detachCertificateFromDistribution(DetachCertificateFromDistributionRequest $args)
    {
        $result = parent::detachCertificateFromDistribution($args->toArray());
        return new DetachCertificateFromDistributionResponse($result->toArray());
    }
}

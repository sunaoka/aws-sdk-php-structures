<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetManagedCertificateDetails;

trait GetManagedCertificateDetailsTrait
{
    /**
     * @param GetManagedCertificateDetailsRequest $args
     * @return GetManagedCertificateDetailsResponse
     */
    public function getManagedCertificateDetails(GetManagedCertificateDetailsRequest $args)
    {
        $result = parent::getManagedCertificateDetails($args->toArray());
        return new GetManagedCertificateDetailsResponse($result->toArray());
    }
}

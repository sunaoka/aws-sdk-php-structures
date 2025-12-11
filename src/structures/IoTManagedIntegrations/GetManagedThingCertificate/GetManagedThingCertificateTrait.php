<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingCertificate;

trait GetManagedThingCertificateTrait
{
    /**
     * @param GetManagedThingCertificateRequest $args
     * @return GetManagedThingCertificateResponse
     */
    public function getManagedThingCertificate(GetManagedThingCertificateRequest $args)
    {
        $result = parent::getManagedThingCertificate($args->toArray());
        return new GetManagedThingCertificateResponse($result->toArray());
    }
}

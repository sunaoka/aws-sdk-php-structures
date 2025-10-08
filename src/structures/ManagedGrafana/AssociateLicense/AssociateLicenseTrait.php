<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\AssociateLicense;

trait AssociateLicenseTrait
{
    /**
     * @param AssociateLicenseRequest $args
     * @return AssociateLicenseResponse
     */
    public function associateLicense(AssociateLicenseRequest $args)
    {
        $result = parent::associateLicense($args->toArray());
        return new AssociateLicenseResponse($result->toArray());
    }
}

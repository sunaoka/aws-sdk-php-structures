<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DisassociateLicense;

trait DisassociateLicenseTrait
{
    /**
     * @param DisassociateLicenseRequest $args
     * @return DisassociateLicenseResponse
     */
    public function disassociateLicense(DisassociateLicenseRequest $args)
    {
        $result = parent::disassociateLicense($args->toArray());
        return new DisassociateLicenseResponse($result->toArray());
    }
}

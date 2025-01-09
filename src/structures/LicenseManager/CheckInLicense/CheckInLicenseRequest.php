<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckInLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConsumptionToken
 * @property string $Beneficiary
 */
class CheckInLicenseRequest extends Request
{
    /**
     * @param array{
     *     LicenseConsumptionToken: string,
     *     Beneficiary?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

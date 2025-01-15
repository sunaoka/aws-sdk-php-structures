<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckInLicense;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConsumptionToken
 * @property string|null $Beneficiary
 */
class CheckInLicenseRequest extends Request
{
    /**
     * @param array{
     *     LicenseConsumptionToken: string,
     *     Beneficiary?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

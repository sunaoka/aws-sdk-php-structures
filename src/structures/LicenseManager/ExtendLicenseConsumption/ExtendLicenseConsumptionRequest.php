<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ExtendLicenseConsumption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConsumptionToken
 * @property bool $DryRun
 */
class ExtendLicenseConsumptionRequest extends Request
{
    /**
     * @param array{
     *     LicenseConsumptionToken: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

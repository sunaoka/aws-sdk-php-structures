<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseArn
 */
class GetLicenseUsageRequest extends Request
{
    /**
     * @param array{LicenseArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

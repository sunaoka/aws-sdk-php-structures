<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConfigurationArn
 */
class GetLicenseConfigurationRequest extends Request
{
    /**
     * @param array{LicenseConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicenseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConfigurationArn
 */
class DeleteLicenseConfigurationRequest extends Request
{
    /**
     * @param array{LicenseConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

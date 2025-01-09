<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\CreateLicenseServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsSalSettings $RdsSalSettings
 */
class ServerSettings extends Shape
{
    /**
     * @param array{RdsSalSettings?: RdsSalSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

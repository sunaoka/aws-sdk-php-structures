<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\CreateLicenseServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsSalSettings|null $RdsSalSettings
 */
class ServerSettings extends Shape
{
    /**
     * @param array{RdsSalSettings?: RdsSalSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

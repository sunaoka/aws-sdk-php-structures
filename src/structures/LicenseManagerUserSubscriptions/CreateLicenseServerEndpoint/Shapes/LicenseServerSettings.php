<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\CreateLicenseServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerSettings $ServerSettings
 * @property 'RDS_SAL' $ServerType
 */
class LicenseServerSettings extends Shape
{
    /**
     * @param array{
     *     ServerSettings: ServerSettings,
     *     ServerType: 'RDS_SAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

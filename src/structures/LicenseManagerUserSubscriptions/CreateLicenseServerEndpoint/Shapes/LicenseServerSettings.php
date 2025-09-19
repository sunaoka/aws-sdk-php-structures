<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\CreateLicenseServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RDS_SAL' $ServerType
 * @property ServerSettings $ServerSettings
 */
class LicenseServerSettings extends Shape
{
    /**
     * @param array{
     *     ServerType: 'RDS_SAL',
     *     ServerSettings: ServerSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

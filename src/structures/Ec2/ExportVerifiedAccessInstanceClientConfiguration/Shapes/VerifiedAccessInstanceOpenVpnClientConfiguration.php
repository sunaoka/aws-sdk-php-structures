<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportVerifiedAccessInstanceClientConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Config
 * @property list<VerifiedAccessInstanceOpenVpnClientConfigurationRoute>|null $Routes
 */
class VerifiedAccessInstanceOpenVpnClientConfiguration extends Shape
{
    /**
     * @param array{
     *     Config?: string|null,
     *     Routes?: list<VerifiedAccessInstanceOpenVpnClientConfigurationRoute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportVerifiedAccessInstanceClientConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Config
 * @property list<VerifiedAccessInstanceOpenVpnClientConfigurationRoute> $Routes
 */
class VerifiedAccessInstanceOpenVpnClientConfiguration extends Shape
{
    /**
     * @param array{
     *     Config?: string,
     *     Routes?: list<VerifiedAccessInstanceOpenVpnClientConfigurationRoute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

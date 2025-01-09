<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\GetServiceSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $OrganizationIntegration
 * @property list<string> $SourceRegions
 */
class LinuxSubscriptionsDiscoverySettings extends Shape
{
    /**
     * @param array{
     *     OrganizationIntegration: 'Enabled'|'Disabled',
     *     SourceRegions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

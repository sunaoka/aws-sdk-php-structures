<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONTHLY'|'HOURLY' $BillingMode
 * @property 'Windows'|'Windows BYOL'|'Linux/UNIX'|'Ubuntu Pro Linux'|'Red Hat Enterprise Linux'|'Red Hat BYOL Linux'|'SUSE Linux' $PlatformType
 * @property 'SHARED'|'DEDICATED' $Tenancy
 */
class InstanceConfigurationFilter extends Shape
{
    /**
     * @param array{
     *     BillingMode: 'MONTHLY'|'HOURLY',
     *     PlatformType: 'Windows'|'Windows BYOL'|'Linux/UNIX'|'Ubuntu Pro Linux'|'Red Hat Enterprise Linux'|'Red Hat BYOL Linux'|'SUSE Linux',
     *     Tenancy: 'SHARED'|'DEDICATED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

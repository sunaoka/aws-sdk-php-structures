<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONTHLY'|'HOURLY'|null $BillingMode
 * @property 'Windows'|'Windows BYOL'|'Linux/UNIX'|'Ubuntu Pro Linux'|'Red Hat Enterprise Linux'|'Red Hat BYOL Linux'|'SUSE Linux'|null $PlatformType
 * @property 'SHARED'|'DEDICATED'|null $Tenancy
 */
class SupportedInstanceConfiguration extends Shape
{
    /**
     * @param array{
     *     BillingMode?: 'MONTHLY'|'HOURLY'|null,
     *     PlatformType?: 'Windows'|'Windows BYOL'|'Linux/UNIX'|'Ubuntu Pro Linux'|'Red Hat Enterprise Linux'|'Red Hat BYOL Linux'|'SUSE Linux'|null,
     *     Tenancy?: 'SHARED'|'DEDICATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

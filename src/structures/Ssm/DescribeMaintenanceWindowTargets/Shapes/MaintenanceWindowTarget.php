<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WindowId
 * @property string|null $WindowTargetId
 * @property 'INSTANCE'|'RESOURCE_GROUP'|null $ResourceType
 * @property list<Target>|null $Targets
 * @property string|null $OwnerInformation
 * @property string|null $Name
 * @property string|null $Description
 */
class MaintenanceWindowTarget extends Shape
{
    /**
     * @param array{
     *     WindowId?: string|null,
     *     WindowTargetId?: string|null,
     *     ResourceType?: 'INSTANCE'|'RESOURCE_GROUP'|null,
     *     Targets?: list<Target>|null,
     *     OwnerInformation?: string|null,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

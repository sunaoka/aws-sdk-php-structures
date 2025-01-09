<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowId
 * @property string $WindowTargetId
 * @property 'INSTANCE'|'RESOURCE_GROUP' $ResourceType
 * @property list<Target> $Targets
 * @property string $OwnerInformation
 * @property string $Name
 * @property string $Description
 */
class MaintenanceWindowTarget extends Shape
{
    /**
     * @param array{
     *     WindowId?: string,
     *     WindowTargetId?: string,
     *     ResourceType?: 'INSTANCE'|'RESOURCE_GROUP',
     *     Targets?: list<Target>,
     *     OwnerInformation?: string,
     *     Name?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

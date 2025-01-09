<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTargetWithMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property 'INSTANCE'|'RESOURCE_GROUP' $ResourceType
 * @property list<Shapes\Target> $Targets
 * @property string $OwnerInformation
 * @property string $Name
 * @property string $Description
 * @property string $ClientToken
 */
class RegisterTargetWithMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     ResourceType: 'INSTANCE'|'RESOURCE_GROUP',
     *     Targets: list<Shapes\Target>,
     *     OwnerInformation?: string,
     *     Name?: string,
     *     Description?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

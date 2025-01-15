<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTargetWithMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property 'INSTANCE'|'RESOURCE_GROUP' $ResourceType
 * @property list<Shapes\Target> $Targets
 * @property string|null $OwnerInformation
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $ClientToken
 */
class RegisterTargetWithMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     ResourceType: 'INSTANCE'|'RESOURCE_GROUP',
     *     Targets: list<Shapes\Target>,
     *     OwnerInformation?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

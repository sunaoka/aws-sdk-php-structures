<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string $WindowTargetId
 * @property list<Shapes\Target> $Targets
 * @property string $OwnerInformation
 * @property string $Name
 * @property string $Description
 * @property bool $Replace
 */
class UpdateMaintenanceWindowTargetRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     WindowTargetId: string,
     *     Targets?: list<Shapes\Target>,
     *     OwnerInformation?: string,
     *     Name?: string,
     *     Description?: string,
     *     Replace?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

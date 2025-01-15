<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string $WindowTargetId
 * @property list<Shapes\Target>|null $Targets
 * @property string|null $OwnerInformation
 * @property string|null $Name
 * @property string|null $Description
 * @property bool|null $Replace
 */
class UpdateMaintenanceWindowTargetRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     WindowTargetId: string,
     *     Targets?: list<Shapes\Target>|null,
     *     OwnerInformation?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Replace?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

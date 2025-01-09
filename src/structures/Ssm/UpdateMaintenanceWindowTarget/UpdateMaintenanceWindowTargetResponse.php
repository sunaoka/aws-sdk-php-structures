<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WindowId
 * @property string $WindowTargetId
 * @property list<Shapes\Target> $Targets
 * @property string $OwnerInformation
 * @property string $Name
 * @property string $Description
 */
class UpdateMaintenanceWindowTargetResponse extends Response
{
}

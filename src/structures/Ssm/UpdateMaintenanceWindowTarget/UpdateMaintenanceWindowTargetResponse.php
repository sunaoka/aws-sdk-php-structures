<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WindowId
 * @property string|null $WindowTargetId
 * @property list<Shapes\Target>|null $Targets
 * @property string|null $OwnerInformation
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateMaintenanceWindowTargetResponse extends Response
{
}

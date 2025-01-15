<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCurrentDBClusterCapacity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DBClusterIdentifier
 * @property int|null $PendingCapacity
 * @property int|null $CurrentCapacity
 * @property int|null $SecondsBeforeTimeout
 * @property string|null $TimeoutAction
 */
class ModifyCurrentDBClusterCapacityResponse extends Response
{
}

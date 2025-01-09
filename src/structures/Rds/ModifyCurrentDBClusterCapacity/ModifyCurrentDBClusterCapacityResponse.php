<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCurrentDBClusterCapacity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DBClusterIdentifier
 * @property int $PendingCapacity
 * @property int $CurrentCapacity
 * @property int $SecondsBeforeTimeout
 * @property string $TimeoutAction
 */
class ModifyCurrentDBClusterCapacityResponse extends Response
{
}

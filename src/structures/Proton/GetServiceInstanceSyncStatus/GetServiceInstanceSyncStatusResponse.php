<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceInstanceSyncStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Revision|null $desiredState
 * @property Shapes\ResourceSyncAttempt|null $latestSuccessfulSync
 * @property Shapes\ResourceSyncAttempt|null $latestSync
 */
class GetServiceInstanceSyncStatusResponse extends Response
{
}

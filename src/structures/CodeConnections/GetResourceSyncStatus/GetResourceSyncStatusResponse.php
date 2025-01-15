<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetResourceSyncStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Revision|null $DesiredState
 * @property Shapes\ResourceSyncAttempt|null $LatestSuccessfulSync
 * @property Shapes\ResourceSyncAttempt $LatestSync
 */
class GetResourceSyncStatusResponse extends Response
{
}

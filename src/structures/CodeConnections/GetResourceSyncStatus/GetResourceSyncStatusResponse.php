<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetResourceSyncStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Revision $DesiredState
 * @property Shapes\ResourceSyncAttempt $LatestSuccessfulSync
 * @property Shapes\ResourceSyncAttempt $LatestSync
 */
class GetResourceSyncStatusResponse extends Response
{
}

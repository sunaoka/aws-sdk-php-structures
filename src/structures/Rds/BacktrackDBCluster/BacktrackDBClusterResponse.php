<?php

namespace Sunaoka\Aws\Structures\Rds\BacktrackDBCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DBClusterIdentifier
 * @property string|null $BacktrackIdentifier
 * @property \Aws\Api\DateTimeResult|null $BacktrackTo
 * @property \Aws\Api\DateTimeResult|null $BacktrackedFrom
 * @property \Aws\Api\DateTimeResult|null $BacktrackRequestCreationTime
 * @property string|null $Status
 */
class BacktrackDBClusterResponse extends Response
{
}

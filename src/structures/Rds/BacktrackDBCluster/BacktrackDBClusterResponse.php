<?php

namespace Sunaoka\Aws\Structures\Rds\BacktrackDBCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DBClusterIdentifier
 * @property string $BacktrackIdentifier
 * @property \Aws\Api\DateTimeResult $BacktrackTo
 * @property \Aws\Api\DateTimeResult $BacktrackedFrom
 * @property \Aws\Api\DateTimeResult $BacktrackRequestCreationTime
 * @property string $Status
 */
class BacktrackDBClusterResponse extends Response
{
}

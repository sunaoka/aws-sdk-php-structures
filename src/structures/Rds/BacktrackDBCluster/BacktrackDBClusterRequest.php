<?php

namespace Sunaoka\Aws\Structures\Rds\BacktrackDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property \Aws\Api\DateTimeResult $BacktrackTo
 * @property bool $Force
 * @property bool $UseEarliestTimeOnPointInTimeUnavailable
 */
class BacktrackDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     BacktrackTo: \Aws\Api\DateTimeResult,
     *     Force?: bool,
     *     UseEarliestTimeOnPointInTimeUnavailable?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\BacktrackDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property \Aws\Api\DateTimeResult $BacktrackTo
 * @property bool|null $Force
 * @property bool|null $UseEarliestTimeOnPointInTimeUnavailable
 */
class BacktrackDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     BacktrackTo: \Aws\Api\DateTimeResult,
     *     Force?: bool|null,
     *     UseEarliestTimeOnPointInTimeUnavailable?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

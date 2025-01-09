<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterBacktracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBClusterIdentifier
 * @property string $BacktrackIdentifier
 * @property \Aws\Api\DateTimeResult $BacktrackTo
 * @property \Aws\Api\DateTimeResult $BacktrackedFrom
 * @property \Aws\Api\DateTimeResult $BacktrackRequestCreationTime
 * @property string $Status
 */
class DBClusterBacktrack extends Shape
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string,
     *     BacktrackIdentifier?: string,
     *     BacktrackTo?: \Aws\Api\DateTimeResult,
     *     BacktrackedFrom?: \Aws\Api\DateTimeResult,
     *     BacktrackRequestCreationTime?: \Aws\Api\DateTimeResult,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

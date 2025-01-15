<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterBacktracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBClusterIdentifier
 * @property string|null $BacktrackIdentifier
 * @property \Aws\Api\DateTimeResult|null $BacktrackTo
 * @property \Aws\Api\DateTimeResult|null $BacktrackedFrom
 * @property \Aws\Api\DateTimeResult|null $BacktrackRequestCreationTime
 * @property string|null $Status
 */
class DBClusterBacktrack extends Shape
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string|null,
     *     BacktrackIdentifier?: string|null,
     *     BacktrackTo?: \Aws\Api\DateTimeResult|null,
     *     BacktrackedFrom?: \Aws\Api\DateTimeResult|null,
     *     BacktrackRequestCreationTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBInstanceAutomatedBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $EarliestTime
 * @property \Aws\Api\DateTimeResult $LatestTime
 */
class RestoreWindow extends Shape
{
    /**
     * @param array{
     *     EarliestTime?: \Aws\Api\DateTimeResult,
     *     LatestTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

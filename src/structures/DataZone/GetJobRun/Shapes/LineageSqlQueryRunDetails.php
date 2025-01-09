<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $errorMessages
 * @property int $numQueriesFailed
 * @property \Aws\Api\DateTimeResult $queryEndTime
 * @property \Aws\Api\DateTimeResult $queryStartTime
 * @property int $totalQueriesProcessed
 */
class LineageSqlQueryRunDetails extends Shape
{
    /**
     * @param array{
     *     errorMessages?: list<string>,
     *     numQueriesFailed?: int,
     *     queryEndTime?: \Aws\Api\DateTimeResult,
     *     queryStartTime?: \Aws\Api\DateTimeResult,
     *     totalQueriesProcessed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

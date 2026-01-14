<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $queryStartTime
 * @property \Aws\Api\DateTimeResult|null $queryEndTime
 * @property int|null $totalQueriesProcessed
 * @property int|null $numQueriesFailed
 * @property list<string>|null $errorMessages
 */
class LineageSqlQueryRunDetails extends Shape
{
    /**
     * @param array{
     *     queryStartTime?: \Aws\Api\DateTimeResult|null,
     *     queryEndTime?: \Aws\Api\DateTimeResult|null,
     *     totalQueriesProcessed?: int|null,
     *     numQueriesFailed?: int|null,
     *     errorMessages?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

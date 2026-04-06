<?php

namespace Sunaoka\Aws\Structures\DataZone\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $errorMessages
 * @property int|null $numQueriesFailed
 * @property \Aws\Api\DateTimeResult|null $queryEndTime
 * @property \Aws\Api\DateTimeResult|null $queryStartTime
 * @property int|null $totalQueriesProcessed
 */
class LineageSqlQueryRunDetails extends Shape
{
    /**
     * @param array{
     *     errorMessages?: list<string>|null,
     *     numQueriesFailed?: int|null,
     *     queryEndTime?: \Aws\Api\DateTimeResult|null,
     *     queryStartTime?: \Aws\Api\DateTimeResult|null,
     *     totalQueriesProcessed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

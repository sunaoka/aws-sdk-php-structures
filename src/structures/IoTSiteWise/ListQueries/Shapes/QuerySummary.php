<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queryId
 * @property 'SUBMITTED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELED'|'CANCELING' $status
 * @property \Aws\Api\DateTimeResult $submittedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class QuerySummary extends Shape
{
    /**
     * @param array{
     *     queryId: string,
     *     status: 'SUBMITTED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELED'|'CANCELING',
     *     submittedAt: \Aws\Api\DateTimeResult,
     *     completedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

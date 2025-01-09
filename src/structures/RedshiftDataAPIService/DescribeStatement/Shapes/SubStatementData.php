<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property int $Duration
 * @property string $Error
 * @property bool $HasResultSet
 * @property string $Id
 * @property string $QueryString
 * @property int $RedshiftQueryId
 * @property int $ResultRows
 * @property int $ResultSize
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class SubStatementData extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     Error?: string,
     *     HasResultSet?: bool,
     *     Id: string,
     *     QueryString?: string,
     *     RedshiftQueryId?: int,
     *     ResultRows?: int,
     *     ResultSize?: int,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED',
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

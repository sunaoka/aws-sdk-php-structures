<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int|null $Duration
 * @property string|null $Error
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $QueryString
 * @property int|null $ResultRows
 * @property int|null $ResultSize
 * @property int|null $RedshiftQueryId
 * @property bool|null $HasResultSet
 */
class SubStatementData extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Duration?: int|null,
     *     Error?: string|null,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     QueryString?: string|null,
     *     ResultRows?: int|null,
     *     ResultSize?: int|null,
     *     RedshiftQueryId?: int|null,
     *     HasResultSet?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property int|null $Duration
 * @property string|null $Error
 * @property bool|null $HasResultSet
 * @property string $Id
 * @property string|null $QueryString
 * @property int|null $RedshiftQueryId
 * @property int|null $ResultRows
 * @property int|null $ResultSize
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class SubStatementData extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     Error?: string|null,
     *     HasResultSet?: bool|null,
     *     Id: string,
     *     QueryString?: string|null,
     *     RedshiftQueryId?: int|null,
     *     ResultRows?: int|null,
     *     ResultSize?: int|null,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

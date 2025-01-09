<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupingStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property 'GROUP'|'UNGROUP' $Action
 * @property 'SUCCESS'|'FAILED'|'IN_PROGRESS'|'SKIPPED' $Status
 * @property string $ErrorMessage
 * @property string $ErrorCode
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class GroupingStatusesItem extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     Action?: 'GROUP'|'UNGROUP',
     *     Status?: 'SUCCESS'|'FAILED'|'IN_PROGRESS'|'SKIPPED',
     *     ErrorMessage?: string,
     *     ErrorCode?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

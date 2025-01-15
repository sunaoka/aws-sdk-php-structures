<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupingStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property 'GROUP'|'UNGROUP'|null $Action
 * @property 'SUCCESS'|'FAILED'|'IN_PROGRESS'|'SKIPPED'|null $Status
 * @property string|null $ErrorMessage
 * @property string|null $ErrorCode
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GroupingStatusesItem extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     Action?: 'GROUP'|'UNGROUP'|null,
     *     Status?: 'SUCCESS'|'FAILED'|'IN_PROGRESS'|'SKIPPED'|null,
     *     ErrorMessage?: string|null,
     *     ErrorCode?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

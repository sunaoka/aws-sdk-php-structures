<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConformancePackName
 * @property string $ConformancePackId
 * @property string $ConformancePackArn
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $ConformancePackState
 * @property string|null $StackArn
 * @property string|null $ConformancePackStatusReason
 * @property \Aws\Api\DateTimeResult $LastUpdateRequestedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateCompletedTime
 * @property 'CUSTOM'|'MANAGED'|null $Type
 */
class ConformancePackStatusDetail extends Shape
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     ConformancePackId: string,
     *     ConformancePackArn: string,
     *     ConformancePackState: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     StackArn?: string|null,
     *     ConformancePackStatusReason?: string|null,
     *     LastUpdateRequestedTime: \Aws\Api\DateTimeResult,
     *     LastUpdateCompletedTime?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'CUSTOM'|'MANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

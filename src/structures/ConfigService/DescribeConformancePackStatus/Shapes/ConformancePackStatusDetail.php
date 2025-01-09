<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConformancePackName
 * @property string $ConformancePackId
 * @property string $ConformancePackArn
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $ConformancePackState
 * @property string $StackArn
 * @property string $ConformancePackStatusReason
 * @property \Aws\Api\DateTimeResult $LastUpdateRequestedTime
 * @property \Aws\Api\DateTimeResult $LastUpdateCompletedTime
 */
class ConformancePackStatusDetail extends Shape
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     ConformancePackId: string,
     *     ConformancePackArn: string,
     *     ConformancePackState: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     StackArn: string,
     *     ConformancePackStatusReason?: string,
     *     LastUpdateRequestedTime: \Aws\Api\DateTimeResult,
     *     LastUpdateCompletedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

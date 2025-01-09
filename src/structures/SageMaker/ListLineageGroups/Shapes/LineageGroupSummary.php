<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLineageGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LineageGroupArn
 * @property string $LineageGroupName
 * @property string $DisplayName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class LineageGroupSummary extends Shape
{
    /**
     * @param array{
     *     LineageGroupArn?: string,
     *     LineageGroupName?: string,
     *     DisplayName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

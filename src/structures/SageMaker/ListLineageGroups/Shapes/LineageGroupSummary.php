<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLineageGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LineageGroupArn
 * @property string|null $LineageGroupName
 * @property string|null $DisplayName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class LineageGroupSummary extends Shape
{
    /**
     * @param array{
     *     LineageGroupArn?: string|null,
     *     LineageGroupName?: string|null,
     *     DisplayName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

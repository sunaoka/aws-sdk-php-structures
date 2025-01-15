<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProjectArn
 * @property string|null $ProjectName
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property list<DatasetMetadata>|null $Datasets
 */
class ProjectDescription extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string|null,
     *     ProjectName?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Datasets?: list<DatasetMetadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

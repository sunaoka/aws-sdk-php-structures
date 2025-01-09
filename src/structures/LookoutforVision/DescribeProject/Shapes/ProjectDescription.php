<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectArn
 * @property string $ProjectName
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property list<DatasetMetadata> $Datasets
 */
class ProjectDescription extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string,
     *     ProjectName?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     Datasets?: list<DatasetMetadata>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

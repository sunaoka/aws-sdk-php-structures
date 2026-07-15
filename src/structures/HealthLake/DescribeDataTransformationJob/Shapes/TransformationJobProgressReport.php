<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeDataTransformationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalFilesScanned
 * @property int $TotalFilesConverted
 * @property int $TotalFilesFailed
 * @property int $TotalResourcesGenerated
 */
class TransformationJobProgressReport extends Shape
{
    /**
     * @param array{
     *     TotalFilesScanned: int,
     *     TotalFilesConverted: int,
     *     TotalFilesFailed: int,
     *     TotalResourcesGenerated: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

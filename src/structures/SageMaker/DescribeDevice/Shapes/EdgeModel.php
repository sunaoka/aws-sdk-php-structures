<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelVersion
 * @property \Aws\Api\DateTimeResult|null $LatestSampleTime
 * @property \Aws\Api\DateTimeResult|null $LatestInference
 */
class EdgeModel extends Shape
{
    /**
     * @param array{
     *     ModelName: string,
     *     ModelVersion: string,
     *     LatestSampleTime?: \Aws\Api\DateTimeResult|null,
     *     LatestInference?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

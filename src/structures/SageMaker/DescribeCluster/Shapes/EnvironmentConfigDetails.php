<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FSxLustreConfig|null $FSxLustreConfig
 * @property string|null $S3OutputPath
 */
class EnvironmentConfigDetails extends Shape
{
    /**
     * @param array{
     *     FSxLustreConfig?: FSxLustreConfig|null,
     *     S3OutputPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

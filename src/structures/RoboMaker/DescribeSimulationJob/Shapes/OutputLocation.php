<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Bucket
 * @property string|null $s3Prefix
 */
class OutputLocation extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string|null,
     *     s3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

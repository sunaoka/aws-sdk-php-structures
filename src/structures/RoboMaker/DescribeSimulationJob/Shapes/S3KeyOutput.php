<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Key
 * @property string|null $etag
 */
class S3KeyOutput extends Shape
{
    /**
     * @param array{
     *     s3Key?: string|null,
     *     etag?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

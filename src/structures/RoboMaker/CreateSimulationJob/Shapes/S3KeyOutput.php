<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Key
 * @property string $etag
 */
class S3KeyOutput extends Shape
{
    /**
     * @param array{
     *     s3Key?: string,
     *     etag?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

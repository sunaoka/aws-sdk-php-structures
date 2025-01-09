<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property S3Location $s3location
 */
class ArtifactDetail extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     s3location?: S3Location
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

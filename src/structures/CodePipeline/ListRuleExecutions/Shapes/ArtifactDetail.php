<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property S3Location|null $s3location
 */
class ArtifactDetail extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     s3location?: S3Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

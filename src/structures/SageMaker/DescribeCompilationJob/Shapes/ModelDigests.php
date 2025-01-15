<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCompilationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ArtifactDigest
 */
class ModelDigests extends Shape
{
    /**
     * @param array{ArtifactDigest?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCompilationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArtifactDigest
 */
class ModelDigests extends Shape
{
    /**
     * @param array{ArtifactDigest?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

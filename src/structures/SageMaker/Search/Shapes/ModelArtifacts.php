<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3ModelArtifacts
 */
class ModelArtifacts extends Shape
{
    /**
     * @param array{S3ModelArtifacts: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

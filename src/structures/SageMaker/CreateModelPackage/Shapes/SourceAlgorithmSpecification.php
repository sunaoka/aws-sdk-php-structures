<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SourceAlgorithm> $SourceAlgorithms
 */
class SourceAlgorithmSpecification extends Shape
{
    /**
     * @param array{SourceAlgorithms: list<SourceAlgorithm>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

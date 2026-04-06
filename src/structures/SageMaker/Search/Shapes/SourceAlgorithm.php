<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelDataUrl
 * @property string $AlgorithmName
 */
class SourceAlgorithm extends Shape
{
    /**
     * @param array{
     *     ModelDataUrl?: string|null,
     *     AlgorithmName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

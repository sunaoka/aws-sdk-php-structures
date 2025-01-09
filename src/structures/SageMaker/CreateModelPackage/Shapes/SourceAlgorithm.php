<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelDataUrl
 * @property ModelDataSource $ModelDataSource
 * @property string $ModelDataETag
 * @property string $AlgorithmName
 */
class SourceAlgorithm extends Shape
{
    /**
     * @param array{
     *     ModelDataUrl?: string,
     *     ModelDataSource?: ModelDataSource,
     *     ModelDataETag?: string,
     *     AlgorithmName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

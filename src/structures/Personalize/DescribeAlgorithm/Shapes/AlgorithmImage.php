<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string $dockerURI
 */
class AlgorithmImage extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     dockerURI: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

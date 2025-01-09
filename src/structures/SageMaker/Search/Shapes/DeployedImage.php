<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SpecifiedImage
 * @property string $ResolvedImage
 * @property \Aws\Api\DateTimeResult $ResolutionTime
 */
class DeployedImage extends Shape
{
    /**
     * @param array{
     *     SpecifiedImage?: string,
     *     ResolvedImage?: string,
     *     ResolutionTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SpecifiedImage
 * @property string|null $ResolvedImage
 * @property \Aws\Api\DateTimeResult|null $ResolutionTime
 */
class DeployedImage extends Shape
{
    /**
     * @param array{
     *     SpecifiedImage?: string|null,
     *     ResolvedImage?: string|null,
     *     ResolutionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

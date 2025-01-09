<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Image
 * @property string $ModelDataUrl
 * @property array<string, string> $Environment
 */
class AutoMLContainerDefinition extends Shape
{
    /**
     * @param array{
     *     Image: string,
     *     ModelDataUrl: string,
     *     Environment?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

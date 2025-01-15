<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Image
 * @property string $ModelDataUrl
 * @property array<string, string>|null $Environment
 */
class AutoMLContainerDefinition extends Shape
{
    /**
     * @param array{
     *     Image: string,
     *     ModelDataUrl: string,
     *     Environment?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

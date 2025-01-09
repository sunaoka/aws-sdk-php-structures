<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseModelName
 */
class TextGenerationResolvedAttributes extends Shape
{
    /**
     * @param array{BaseModelName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TabularResolvedAttributes|null $TabularResolvedAttributes
 */
class AutoMLProblemTypeResolvedAttributes extends Shape
{
    /**
     * @param array{TabularResolvedAttributes?: TabularResolvedAttributes|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

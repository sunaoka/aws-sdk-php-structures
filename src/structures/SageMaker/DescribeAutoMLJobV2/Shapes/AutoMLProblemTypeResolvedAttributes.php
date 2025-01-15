<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TabularResolvedAttributes|null $TabularResolvedAttributes
 * @property TextGenerationResolvedAttributes|null $TextGenerationResolvedAttributes
 */
class AutoMLProblemTypeResolvedAttributes extends Shape
{
    /**
     * @param array{
     *     TabularResolvedAttributes?: TabularResolvedAttributes|null,
     *     TextGenerationResolvedAttributes?: TextGenerationResolvedAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

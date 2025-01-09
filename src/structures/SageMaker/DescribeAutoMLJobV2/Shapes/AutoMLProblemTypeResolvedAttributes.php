<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TabularResolvedAttributes $TabularResolvedAttributes
 * @property TextGenerationResolvedAttributes $TextGenerationResolvedAttributes
 */
class AutoMLProblemTypeResolvedAttributes extends Shape
{
    /**
     * @param array{
     *     TabularResolvedAttributes?: TabularResolvedAttributes,
     *     TextGenerationResolvedAttributes?: TextGenerationResolvedAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

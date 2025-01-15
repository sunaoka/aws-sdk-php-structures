<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIND_MATCHES' $TransformType
 * @property FindMatchesMetrics|null $FindMatchesMetrics
 */
class EvaluationMetrics extends Shape
{
    /**
     * @param array{
     *     TransformType: 'FIND_MATCHES',
     *     FindMatchesMetrics?: FindMatchesMetrics|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

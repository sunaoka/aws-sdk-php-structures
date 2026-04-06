<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUERY_DECOMPOSITION' $type
 */
class QueryTransformationConfiguration extends Shape
{
    /**
     * @param array{type: 'QUERY_DECOMPOSITION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

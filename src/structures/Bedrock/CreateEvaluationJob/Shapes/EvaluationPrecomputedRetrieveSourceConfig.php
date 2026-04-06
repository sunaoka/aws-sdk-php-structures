<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ragSourceIdentifier
 */
class EvaluationPrecomputedRetrieveSourceConfig extends Shape
{
    /**
     * @param array{ragSourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

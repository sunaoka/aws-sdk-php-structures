<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ragSourceIdentifier
 */
class EvaluationPrecomputedRetrieveAndGenerateSourceConfig extends Shape
{
    /**
     * @param array{ragSourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

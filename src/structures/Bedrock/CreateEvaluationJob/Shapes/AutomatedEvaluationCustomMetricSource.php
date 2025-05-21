<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomMetricDefinition|null $customMetricDefinition
 */
class AutomatedEvaluationCustomMetricSource extends Shape
{
    /**
     * @param array{customMetricDefinition?: CustomMetricDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

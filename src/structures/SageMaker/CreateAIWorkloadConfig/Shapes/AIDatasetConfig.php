<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIWorkloadConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AIWorkloadInputDataConfig>|null $InputDataConfig
 */
class AIDatasetConfig extends Shape
{
    /**
     * @param array{InputDataConfig?: list<AIWorkloadInputDataConfig>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

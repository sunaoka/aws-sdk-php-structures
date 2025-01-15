<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutoMLAlgorithmConfig>|null $AlgorithmsConfig
 */
class CandidateGenerationConfig extends Shape
{
    /**
     * @param array{AlgorithmsConfig?: list<AutoMLAlgorithmConfig>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

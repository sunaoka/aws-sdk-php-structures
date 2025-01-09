<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $itemExplorationConfig
 */
class BatchInferenceJobConfig extends Shape
{
    /**
     * @param array{itemExplorationConfig?: array<string, string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

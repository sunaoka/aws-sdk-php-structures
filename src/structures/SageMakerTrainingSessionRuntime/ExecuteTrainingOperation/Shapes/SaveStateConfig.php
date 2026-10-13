<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 */
class SaveStateConfig extends Shape
{
    /**
     * @param array{description?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

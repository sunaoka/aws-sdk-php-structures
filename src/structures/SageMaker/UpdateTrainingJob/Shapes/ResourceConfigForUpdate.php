<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $KeepAlivePeriodInSeconds
 */
class ResourceConfigForUpdate extends Shape
{
    /**
     * @param array{KeepAlivePeriodInSeconds: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

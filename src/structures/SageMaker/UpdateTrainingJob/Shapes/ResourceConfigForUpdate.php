<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 21600> $KeepAlivePeriodInSeconds
 */
class ResourceConfigForUpdate extends Shape
{
    /**
     * @param array{KeepAlivePeriodInSeconds: int<0, 21600>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

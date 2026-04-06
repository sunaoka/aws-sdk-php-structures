<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HubContentArn
 */
class HubAccessConfig extends Shape
{
    /**
     * @param array{HubContentArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

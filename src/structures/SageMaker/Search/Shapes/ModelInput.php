<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataInputConfig
 */
class ModelInput extends Shape
{
    /**
     * @param array{DataInputConfig: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

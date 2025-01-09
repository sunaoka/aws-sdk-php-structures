<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClarifyExplainerConfig $ClarifyExplainerConfig
 */
class ExplainerConfig extends Shape
{
    /**
     * @param array{ClarifyExplainerConfig?: ClarifyExplainerConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClarifyExplainerConfig|null $ClarifyExplainerConfig
 */
class ExplainerConfig extends Shape
{
    /**
     * @param array{ClarifyExplainerConfig?: ClarifyExplainerConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

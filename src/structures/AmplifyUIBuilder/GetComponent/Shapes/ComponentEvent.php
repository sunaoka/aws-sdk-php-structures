<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $action
 * @property ActionParameters|null $parameters
 * @property string|null $bindingEvent
 */
class ComponentEvent extends Shape
{
    /**
     * @param array{
     *     action?: string|null,
     *     parameters?: ActionParameters|null,
     *     bindingEvent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

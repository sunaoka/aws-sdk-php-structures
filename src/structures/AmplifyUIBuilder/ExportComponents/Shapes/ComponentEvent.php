<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property ActionParameters $parameters
 * @property string $bindingEvent
 */
class ComponentEvent extends Shape
{
    /**
     * @param array{
     *     action?: string,
     *     parameters?: ActionParameters,
     *     bindingEvent?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

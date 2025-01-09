<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEVICE_MODEL_ID' $name
 * @property list<string> $value
 */
class FlowTemplateFilter extends Shape
{
    /**
     * @param array{
     *     name: 'DEVICE_MODEL_ID',
     *     value: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

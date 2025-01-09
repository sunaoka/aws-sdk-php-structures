<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FLOW_TEMPLATE_ID' $name
 * @property list<string> $value
 */
class SystemTemplateFilter extends Shape
{
    /**
     * @param array{
     *     name: 'FLOW_TEMPLATE_ID',
     *     value: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

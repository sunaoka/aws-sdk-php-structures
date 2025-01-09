<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SYSTEM_TEMPLATE_ID'|'STATUS'|'GREENGRASS_GROUP_NAME' $name
 * @property list<string> $value
 */
class SystemInstanceFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'SYSTEM_TEMPLATE_ID'|'STATUS'|'GREENGRASS_GROUP_NAME',
     *     value?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

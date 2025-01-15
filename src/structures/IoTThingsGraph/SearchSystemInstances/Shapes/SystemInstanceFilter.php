<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SYSTEM_TEMPLATE_ID'|'STATUS'|'GREENGRASS_GROUP_NAME'|null $name
 * @property list<string>|null $value
 */
class SystemInstanceFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'SYSTEM_TEMPLATE_ID'|'STATUS'|'GREENGRASS_GROUP_NAME'|null,
     *     value?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $extendsFrom
 * @property string|null $namespace
 * @property bool|null $isAbstract
 */
class ListComponentTypesFilter extends Shape
{
    /**
     * @param array{
     *     extendsFrom?: string|null,
     *     namespace?: string|null,
     *     isAbstract?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

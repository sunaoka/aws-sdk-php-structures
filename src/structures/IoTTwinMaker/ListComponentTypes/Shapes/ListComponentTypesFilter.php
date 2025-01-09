<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $extendsFrom
 * @property string $namespace
 * @property bool $isAbstract
 */
class ListComponentTypesFilter extends Shape
{
    /**
     * @param array{
     *     extendsFrom?: string,
     *     namespace?: string,
     *     isAbstract?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isValueEditable
 * @property string $key
 * @property string $value
 */
class ResourceTagParameter extends Shape
{
    /**
     * @param array{
     *     isValueEditable: bool,
     *     key: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

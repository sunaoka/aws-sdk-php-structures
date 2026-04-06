<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 * @property bool $isValueEditable
 */
class ResourceTagParameter extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: string,
     *     isValueEditable: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

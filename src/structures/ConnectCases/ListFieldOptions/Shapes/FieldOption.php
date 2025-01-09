<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListFieldOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $active
 * @property string $name
 * @property string $value
 */
class FieldOption extends Shape
{
    /**
     * @param array{
     *     active: bool,
     *     name: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

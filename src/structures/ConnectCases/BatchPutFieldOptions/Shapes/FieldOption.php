<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchPutFieldOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $value
 * @property bool $active
 */
class FieldOption extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value: string,
     *     active: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property Document $value
 */
class EnabledControlParameter extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: Document
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

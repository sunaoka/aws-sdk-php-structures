<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property FontConfiguration $FontConfiguration
 */
class TableFieldCustomTextContent extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     FontConfiguration: FontConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property FontConfiguration $FontConfiguration
 */
class TableFieldCustomTextContent extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     FontConfiguration: FontConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

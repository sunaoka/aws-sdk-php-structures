<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property FormatConfiguration $FormatConfiguration
 * @property 'DIMENSION'|'MEASURE' $Role
 * @property ColorsConfiguration $ColorsConfiguration
 */
class ColumnConfiguration extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     FormatConfiguration?: FormatConfiguration,
     *     Role?: 'DIMENSION'|'MEASURE',
     *     ColorsConfiguration?: ColorsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

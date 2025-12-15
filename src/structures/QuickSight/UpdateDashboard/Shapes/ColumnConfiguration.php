<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property FormatConfiguration|null $FormatConfiguration
 * @property 'DIMENSION'|'MEASURE'|null $Role
 * @property ColorsConfiguration|null $ColorsConfiguration
 * @property DecalSettingsConfiguration|null $DecalSettingsConfiguration
 */
class ColumnConfiguration extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     FormatConfiguration?: FormatConfiguration|null,
     *     Role?: 'DIMENSION'|'MEASURE'|null,
     *     ColorsConfiguration?: ColorsConfiguration|null,
     *     DecalSettingsConfiguration?: DecalSettingsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

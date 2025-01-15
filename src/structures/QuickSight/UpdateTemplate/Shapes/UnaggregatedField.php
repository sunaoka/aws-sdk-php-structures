<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property FormatConfiguration|null $FormatConfiguration
 */
class UnaggregatedField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     FormatConfiguration?: FormatConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

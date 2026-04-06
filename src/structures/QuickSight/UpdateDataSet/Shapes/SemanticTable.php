<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property string $DestinationTableId
 * @property RowLevelPermissionConfiguration|null $RowLevelPermissionConfiguration
 */
class SemanticTable extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     DestinationTableId: string,
     *     RowLevelPermissionConfiguration?: RowLevelPermissionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

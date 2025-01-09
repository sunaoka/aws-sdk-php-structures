<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LayerId
 * @property 'POINT'|'LINE'|'POLYGON' $LayerType
 * @property GeospatialDataSourceItem $DataSource
 * @property string $Label
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property GeospatialLayerDefinition $LayerDefinition
 * @property TooltipOptions $Tooltip
 * @property GeospatialLayerJoinDefinition $JoinDefinition
 * @property list<LayerCustomAction> $Actions
 */
class GeospatialLayerItem extends Shape
{
    /**
     * @param array{
     *     LayerId: string,
     *     LayerType?: 'POINT'|'LINE'|'POLYGON',
     *     DataSource?: GeospatialDataSourceItem,
     *     Label?: string,
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     LayerDefinition?: GeospatialLayerDefinition,
     *     Tooltip?: TooltipOptions,
     *     JoinDefinition?: GeospatialLayerJoinDefinition,
     *     Actions?: list<LayerCustomAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

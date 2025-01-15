<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LayerId
 * @property 'POINT'|'LINE'|'POLYGON'|null $LayerType
 * @property GeospatialDataSourceItem|null $DataSource
 * @property string|null $Label
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property GeospatialLayerDefinition|null $LayerDefinition
 * @property TooltipOptions|null $Tooltip
 * @property GeospatialLayerJoinDefinition|null $JoinDefinition
 * @property list<LayerCustomAction>|null $Actions
 */
class GeospatialLayerItem extends Shape
{
    /**
     * @param array{
     *     LayerId: string,
     *     LayerType?: 'POINT'|'LINE'|'POLYGON'|null,
     *     DataSource?: GeospatialDataSourceItem|null,
     *     Label?: string|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     LayerDefinition?: GeospatialLayerDefinition|null,
     *     Tooltip?: TooltipOptions|null,
     *     JoinDefinition?: GeospatialLayerJoinDefinition|null,
     *     Actions?: list<LayerCustomAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

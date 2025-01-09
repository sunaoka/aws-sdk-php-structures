<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShapeKeyField
 * @property UnaggregatedField $DatasetKeyField
 * @property GeospatialLayerColorField $ColorField
 */
class GeospatialLayerJoinDefinition extends Shape
{
    /**
     * @param array{
     *     ShapeKeyField?: string,
     *     DatasetKeyField?: UnaggregatedField,
     *     ColorField?: GeospatialLayerColorField
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

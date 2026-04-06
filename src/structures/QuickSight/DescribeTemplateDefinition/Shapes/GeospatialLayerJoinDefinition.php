<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShapeKeyField
 * @property UnaggregatedField|null $DatasetKeyField
 * @property GeospatialLayerColorField|null $ColorField
 */
class GeospatialLayerJoinDefinition extends Shape
{
    /**
     * @param array{
     *     ShapeKeyField?: string|null,
     *     DatasetKeyField?: UnaggregatedField|null,
     *     ColorField?: GeospatialLayerColorField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

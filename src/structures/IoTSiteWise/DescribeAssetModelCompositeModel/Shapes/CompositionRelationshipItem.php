<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 */
class CompositionRelationshipItem extends Shape
{
    /**
     * @param array{id?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

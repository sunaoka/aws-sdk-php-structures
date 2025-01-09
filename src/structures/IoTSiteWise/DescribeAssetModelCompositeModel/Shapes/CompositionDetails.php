<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CompositionRelationshipItem> $compositionRelationship
 */
class CompositionDetails extends Shape
{
    /**
     * @param array{compositionRelationship?: list<CompositionRelationshipItem>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property VectorAttributeDefinition $VectorAttribute
 * @property list<SearchSchemaElement>|null $SearchSchema
 * @property Projection $Projection
 * @property int<1, max> $Dimensions
 * @property 'COSINE'|'DOT_PRODUCT'|'EUCLIDEAN' $DistanceFunction
 */
class VectorIndex extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     VectorAttribute: VectorAttributeDefinition,
     *     SearchSchema?: list<SearchSchemaElement>|null,
     *     Projection: Projection,
     *     Dimensions: int<1, max>,
     *     DistanceFunction: 'COSINE'|'DOT_PRODUCT'|'EUCLIDEAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

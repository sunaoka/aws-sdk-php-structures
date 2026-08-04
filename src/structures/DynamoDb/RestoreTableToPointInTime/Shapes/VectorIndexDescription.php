<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property list<SearchSchemaElement>|null $SearchSchema
 * @property Projection|null $Projection
 * @property VectorAttributeDefinition|null $VectorAttribute
 * @property int<1, max>|null $Dimensions
 * @property 'COSINE'|'DOT_PRODUCT'|'EUCLIDEAN'|null $DistanceFunction
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null $IndexStatus
 * @property bool|null $Backfilling
 * @property int|null $IndexSizeBytes
 * @property int|null $ItemCount
 * @property string|null $IndexArn
 */
class VectorIndexDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     SearchSchema?: list<SearchSchemaElement>|null,
     *     Projection?: Projection|null,
     *     VectorAttribute?: VectorAttributeDefinition|null,
     *     Dimensions?: int<1, max>|null,
     *     DistanceFunction?: 'COSINE'|'DOT_PRODUCT'|'EUCLIDEAN'|null,
     *     IndexStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null,
     *     Backfilling?: bool|null,
     *     IndexSizeBytes?: int|null,
     *     ItemCount?: int|null,
     *     IndexArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property VectorAttributeDefinition|null $VectorAttribute
 * @property list<SearchSchemaElement>|null $SearchSchema
 * @property Projection|null $Projection
 * @property int<1, max>|null $Dimensions
 * @property 'COSINE'|'DOT_PRODUCT'|'EUCLIDEAN'|null $DistanceFunction
 */
class VectorIndexInfo extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     VectorAttribute?: VectorAttributeDefinition|null,
     *     SearchSchema?: list<SearchSchemaElement>|null,
     *     Projection?: Projection|null,
     *     Dimensions?: int<1, max>|null,
     *     DistanceFunction?: 'COSINE'|'DOT_PRODUCT'|'EUCLIDEAN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

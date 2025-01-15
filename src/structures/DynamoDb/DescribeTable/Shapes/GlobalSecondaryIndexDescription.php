<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property list<KeySchemaElement>|null $KeySchema
 * @property Projection|null $Projection
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null $IndexStatus
 * @property bool|null $Backfilling
 * @property ProvisionedThroughputDescription|null $ProvisionedThroughput
 * @property int|null $IndexSizeBytes
 * @property int|null $ItemCount
 * @property string|null $IndexArn
 * @property OnDemandThroughput|null $OnDemandThroughput
 * @property GlobalSecondaryIndexWarmThroughputDescription|null $WarmThroughput
 */
class GlobalSecondaryIndexDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     KeySchema?: list<KeySchemaElement>|null,
     *     Projection?: Projection|null,
     *     IndexStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null,
     *     Backfilling?: bool|null,
     *     ProvisionedThroughput?: ProvisionedThroughputDescription|null,
     *     IndexSizeBytes?: int|null,
     *     ItemCount?: int|null,
     *     IndexArn?: string|null,
     *     OnDemandThroughput?: OnDemandThroughput|null,
     *     WarmThroughput?: GlobalSecondaryIndexWarmThroughputDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property list<KeySchemaElement> $KeySchema
 * @property Projection $Projection
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE' $IndexStatus
 * @property bool $Backfilling
 * @property ProvisionedThroughputDescription $ProvisionedThroughput
 * @property int $IndexSizeBytes
 * @property int $ItemCount
 * @property string $IndexArn
 * @property OnDemandThroughput $OnDemandThroughput
 * @property GlobalSecondaryIndexWarmThroughputDescription $WarmThroughput
 */
class GlobalSecondaryIndexDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     KeySchema?: list<KeySchemaElement>,
     *     Projection?: Projection,
     *     IndexStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE',
     *     Backfilling?: bool,
     *     ProvisionedThroughput?: ProvisionedThroughputDescription,
     *     IndexSizeBytes?: int,
     *     ItemCount?: int,
     *     IndexArn?: string,
     *     OnDemandThroughput?: OnDemandThroughput,
     *     WarmThroughput?: GlobalSecondaryIndexWarmThroughputDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

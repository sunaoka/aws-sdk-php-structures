<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property list<KeySchemaElement> $KeySchema
 * @property Projection $Projection
 * @property ProvisionedThroughput $ProvisionedThroughput
 * @property OnDemandThroughput $OnDemandThroughput
 * @property WarmThroughput $WarmThroughput
 */
class GlobalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     KeySchema: list<KeySchemaElement>,
     *     Projection: Projection,
     *     ProvisionedThroughput?: ProvisionedThroughput,
     *     OnDemandThroughput?: OnDemandThroughput,
     *     WarmThroughput?: WarmThroughput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

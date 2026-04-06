<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property list<KeySchemaElement> $KeySchema
 * @property Projection $Projection
 * @property ProvisionedThroughput|null $ProvisionedThroughput
 * @property OnDemandThroughput|null $OnDemandThroughput
 * @property WarmThroughput|null $WarmThroughput
 */
class GlobalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     KeySchema: list<KeySchemaElement>,
     *     Projection: Projection,
     *     ProvisionedThroughput?: ProvisionedThroughput|null,
     *     OnDemandThroughput?: OnDemandThroughput|null,
     *     WarmThroughput?: WarmThroughput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property list<KeySchemaElement> $KeySchema
 * @property Projection $Projection
 * @property ProvisionedThroughput|null $ProvisionedThroughput
 * @property OnDemandThroughput|null $OnDemandThroughput
 */
class GlobalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     KeySchema: list<KeySchemaElement>,
     *     Projection: Projection,
     *     ProvisionedThroughput?: ProvisionedThroughput|null,
     *     OnDemandThroughput?: OnDemandThroughput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

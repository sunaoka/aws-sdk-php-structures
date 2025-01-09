<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property list<KeySchemaElement> $KeySchema
 * @property Projection $Projection
 * @property ProvisionedThroughput $ProvisionedThroughput
 * @property OnDemandThroughput $OnDemandThroughput
 */
class GlobalSecondaryIndexInfo extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     KeySchema?: list<KeySchemaElement>,
     *     Projection?: Projection,
     *     ProvisionedThroughput?: ProvisionedThroughput,
     *     OnDemandThroughput?: OnDemandThroughput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

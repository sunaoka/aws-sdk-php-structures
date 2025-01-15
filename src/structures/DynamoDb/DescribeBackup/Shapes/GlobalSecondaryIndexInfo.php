<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property list<KeySchemaElement>|null $KeySchema
 * @property Projection|null $Projection
 * @property ProvisionedThroughput|null $ProvisionedThroughput
 * @property OnDemandThroughput|null $OnDemandThroughput
 */
class GlobalSecondaryIndexInfo extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     KeySchema?: list<KeySchemaElement>|null,
     *     Projection?: Projection|null,
     *     ProvisionedThroughput?: ProvisionedThroughput|null,
     *     OnDemandThroughput?: OnDemandThroughput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

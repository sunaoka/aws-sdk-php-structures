<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property list<AttributeDefinition> $AttributeDefinitions
 * @property list<KeySchemaElement> $KeySchema
 * @property 'PROVISIONED'|'PAY_PER_REQUEST' $BillingMode
 * @property ProvisionedThroughput $ProvisionedThroughput
 * @property OnDemandThroughput $OnDemandThroughput
 * @property SSESpecification $SSESpecification
 * @property list<GlobalSecondaryIndex> $GlobalSecondaryIndexes
 */
class TableCreationParameters extends Shape
{
    /**
     * @param array{
     *     TableName: string,
     *     AttributeDefinitions: list<AttributeDefinition>,
     *     KeySchema: list<KeySchemaElement>,
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST',
     *     ProvisionedThroughput?: ProvisionedThroughput,
     *     OnDemandThroughput?: OnDemandThroughput,
     *     SSESpecification?: SSESpecification,
     *     GlobalSecondaryIndexes?: list<GlobalSecondaryIndex>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

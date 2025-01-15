<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property list<AttributeDefinition> $AttributeDefinitions
 * @property list<KeySchemaElement> $KeySchema
 * @property 'PROVISIONED'|'PAY_PER_REQUEST'|null $BillingMode
 * @property ProvisionedThroughput|null $ProvisionedThroughput
 * @property OnDemandThroughput|null $OnDemandThroughput
 * @property SSESpecification|null $SSESpecification
 * @property list<GlobalSecondaryIndex>|null $GlobalSecondaryIndexes
 */
class TableCreationParameters extends Shape
{
    /**
     * @param array{
     *     TableName: string,
     *     AttributeDefinitions: list<AttributeDefinition>,
     *     KeySchema: list<KeySchemaElement>,
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST'|null,
     *     ProvisionedThroughput?: ProvisionedThroughput|null,
     *     OnDemandThroughput?: OnDemandThroughput|null,
     *     SSESpecification?: SSESpecification|null,
     *     GlobalSecondaryIndexes?: list<GlobalSecondaryIndex>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

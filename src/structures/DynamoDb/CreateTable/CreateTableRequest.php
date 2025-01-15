<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AttributeDefinition> $AttributeDefinitions
 * @property string $TableName
 * @property list<Shapes\KeySchemaElement> $KeySchema
 * @property list<Shapes\LocalSecondaryIndex>|null $LocalSecondaryIndexes
 * @property list<Shapes\GlobalSecondaryIndex>|null $GlobalSecondaryIndexes
 * @property 'PROVISIONED'|'PAY_PER_REQUEST'|null $BillingMode
 * @property Shapes\ProvisionedThroughput|null $ProvisionedThroughput
 * @property Shapes\StreamSpecification|null $StreamSpecification
 * @property Shapes\SSESpecification|null $SSESpecification
 * @property list<Shapes\Tag>|null $Tags
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null $TableClass
 * @property bool|null $DeletionProtectionEnabled
 * @property Shapes\WarmThroughput|null $WarmThroughput
 * @property string|null $ResourcePolicy
 * @property Shapes\OnDemandThroughput|null $OnDemandThroughput
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     AttributeDefinitions: list<Shapes\AttributeDefinition>,
     *     TableName: string,
     *     KeySchema: list<Shapes\KeySchemaElement>,
     *     LocalSecondaryIndexes?: list<Shapes\LocalSecondaryIndex>|null,
     *     GlobalSecondaryIndexes?: list<Shapes\GlobalSecondaryIndex>|null,
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST'|null,
     *     ProvisionedThroughput?: Shapes\ProvisionedThroughput|null,
     *     StreamSpecification?: Shapes\StreamSpecification|null,
     *     SSESpecification?: Shapes\SSESpecification|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     TableClass?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null,
     *     DeletionProtectionEnabled?: bool|null,
     *     WarmThroughput?: Shapes\WarmThroughput|null,
     *     ResourcePolicy?: string|null,
     *     OnDemandThroughput?: Shapes\OnDemandThroughput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

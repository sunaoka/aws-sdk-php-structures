<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AttributeDefinition> $AttributeDefinitions
 * @property string $TableName
 * @property list<Shapes\KeySchemaElement> $KeySchema
 * @property list<Shapes\LocalSecondaryIndex> $LocalSecondaryIndexes
 * @property list<Shapes\GlobalSecondaryIndex> $GlobalSecondaryIndexes
 * @property 'PROVISIONED'|'PAY_PER_REQUEST' $BillingMode
 * @property Shapes\ProvisionedThroughput $ProvisionedThroughput
 * @property Shapes\StreamSpecification $StreamSpecification
 * @property Shapes\SSESpecification $SSESpecification
 * @property list<Shapes\Tag> $Tags
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS' $TableClass
 * @property bool $DeletionProtectionEnabled
 * @property Shapes\WarmThroughput $WarmThroughput
 * @property string $ResourcePolicy
 * @property Shapes\OnDemandThroughput $OnDemandThroughput
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     AttributeDefinitions: list<Shapes\AttributeDefinition>,
     *     TableName: string,
     *     KeySchema: list<Shapes\KeySchemaElement>,
     *     LocalSecondaryIndexes?: list<Shapes\LocalSecondaryIndex>,
     *     GlobalSecondaryIndexes?: list<Shapes\GlobalSecondaryIndex>,
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST',
     *     ProvisionedThroughput?: Shapes\ProvisionedThroughput,
     *     StreamSpecification?: Shapes\StreamSpecification,
     *     SSESpecification?: Shapes\SSESpecification,
     *     Tags?: list<Shapes\Tag>,
     *     TableClass?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS',
     *     DeletionProtectionEnabled?: bool,
     *     WarmThroughput?: Shapes\WarmThroughput,
     *     ResourcePolicy?: string,
     *     OnDemandThroughput?: Shapes\OnDemandThroughput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

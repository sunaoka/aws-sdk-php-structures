<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeDefinition> $AttributeDefinitions
 * @property string $TableName
 * @property list<KeySchemaElement> $KeySchema
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED' $TableStatus
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property ProvisionedThroughputDescription $ProvisionedThroughput
 * @property int $TableSizeBytes
 * @property int $ItemCount
 * @property string $TableArn
 * @property string $TableId
 * @property BillingModeSummary $BillingModeSummary
 * @property list<LocalSecondaryIndexDescription> $LocalSecondaryIndexes
 * @property list<GlobalSecondaryIndexDescription> $GlobalSecondaryIndexes
 * @property StreamSpecification $StreamSpecification
 * @property string $LatestStreamLabel
 * @property string $LatestStreamArn
 * @property string $GlobalTableVersion
 * @property list<ReplicaDescription> $Replicas
 * @property RestoreSummary $RestoreSummary
 * @property SSEDescription $SSEDescription
 * @property ArchivalSummary $ArchivalSummary
 * @property TableClassSummary $TableClassSummary
 * @property bool $DeletionProtectionEnabled
 * @property OnDemandThroughput $OnDemandThroughput
 * @property TableWarmThroughputDescription $WarmThroughput
 * @property 'EVENTUAL'|'STRONG' $MultiRegionConsistency
 */
class TableDescription extends Shape
{
    /**
     * @param array{
     *     AttributeDefinitions?: list<AttributeDefinition>,
     *     TableName?: string,
     *     KeySchema?: list<KeySchemaElement>,
     *     TableStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED',
     *     CreationDateTime?: \Aws\Api\DateTimeResult,
     *     ProvisionedThroughput?: ProvisionedThroughputDescription,
     *     TableSizeBytes?: int,
     *     ItemCount?: int,
     *     TableArn?: string,
     *     TableId?: string,
     *     BillingModeSummary?: BillingModeSummary,
     *     LocalSecondaryIndexes?: list<LocalSecondaryIndexDescription>,
     *     GlobalSecondaryIndexes?: list<GlobalSecondaryIndexDescription>,
     *     StreamSpecification?: StreamSpecification,
     *     LatestStreamLabel?: string,
     *     LatestStreamArn?: string,
     *     GlobalTableVersion?: string,
     *     Replicas?: list<ReplicaDescription>,
     *     RestoreSummary?: RestoreSummary,
     *     SSEDescription?: SSEDescription,
     *     ArchivalSummary?: ArchivalSummary,
     *     TableClassSummary?: TableClassSummary,
     *     DeletionProtectionEnabled?: bool,
     *     OnDemandThroughput?: OnDemandThroughput,
     *     WarmThroughput?: TableWarmThroughputDescription,
     *     MultiRegionConsistency?: 'EVENTUAL'|'STRONG'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

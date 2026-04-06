<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeDefinition>|null $AttributeDefinitions
 * @property string|null $TableName
 * @property list<KeySchemaElement>|null $KeySchema
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'|'REPLICATION_NOT_AUTHORIZED'|null $TableStatus
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 * @property ProvisionedThroughputDescription|null $ProvisionedThroughput
 * @property int|null $TableSizeBytes
 * @property int|null $ItemCount
 * @property string|null $TableArn
 * @property string|null $TableId
 * @property BillingModeSummary|null $BillingModeSummary
 * @property list<LocalSecondaryIndexDescription>|null $LocalSecondaryIndexes
 * @property list<GlobalSecondaryIndexDescription>|null $GlobalSecondaryIndexes
 * @property StreamSpecification|null $StreamSpecification
 * @property string|null $LatestStreamLabel
 * @property string|null $LatestStreamArn
 * @property string|null $GlobalTableVersion
 * @property list<ReplicaDescription>|null $Replicas
 * @property list<GlobalTableWitnessDescription>|null $GlobalTableWitnesses
 * @property 'ENABLED'|'DISABLED'|'ENABLED_WITH_OVERRIDES'|null $GlobalTableSettingsReplicationMode
 * @property RestoreSummary|null $RestoreSummary
 * @property SSEDescription|null $SSEDescription
 * @property ArchivalSummary|null $ArchivalSummary
 * @property TableClassSummary|null $TableClassSummary
 * @property bool|null $DeletionProtectionEnabled
 * @property OnDemandThroughput|null $OnDemandThroughput
 * @property TableWarmThroughputDescription|null $WarmThroughput
 * @property 'EVENTUAL'|'STRONG'|null $MultiRegionConsistency
 */
class TableDescription extends Shape
{
    /**
     * @param array{
     *     AttributeDefinitions?: list<AttributeDefinition>|null,
     *     TableName?: string|null,
     *     KeySchema?: list<KeySchemaElement>|null,
     *     TableStatus?: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|'ARCHIVING'|'ARCHIVED'|'REPLICATION_NOT_AUTHORIZED'|null,
     *     CreationDateTime?: \Aws\Api\DateTimeResult|null,
     *     ProvisionedThroughput?: ProvisionedThroughputDescription|null,
     *     TableSizeBytes?: int|null,
     *     ItemCount?: int|null,
     *     TableArn?: string|null,
     *     TableId?: string|null,
     *     BillingModeSummary?: BillingModeSummary|null,
     *     LocalSecondaryIndexes?: list<LocalSecondaryIndexDescription>|null,
     *     GlobalSecondaryIndexes?: list<GlobalSecondaryIndexDescription>|null,
     *     StreamSpecification?: StreamSpecification|null,
     *     LatestStreamLabel?: string|null,
     *     LatestStreamArn?: string|null,
     *     GlobalTableVersion?: string|null,
     *     Replicas?: list<ReplicaDescription>|null,
     *     GlobalTableWitnesses?: list<GlobalTableWitnessDescription>|null,
     *     GlobalTableSettingsReplicationMode?: 'ENABLED'|'DISABLED'|'ENABLED_WITH_OVERRIDES'|null,
     *     RestoreSummary?: RestoreSummary|null,
     *     SSEDescription?: SSEDescription|null,
     *     ArchivalSummary?: ArchivalSummary|null,
     *     TableClassSummary?: TableClassSummary|null,
     *     DeletionProtectionEnabled?: bool|null,
     *     OnDemandThroughput?: OnDemandThroughput|null,
     *     WarmThroughput?: TableWarmThroughputDescription|null,
     *     MultiRegionConsistency?: 'EVENTUAL'|'STRONG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

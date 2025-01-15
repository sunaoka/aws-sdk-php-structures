<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsDynamoDbTableAttributeDefinition>|null $AttributeDefinitions
 * @property AwsDynamoDbTableBillingModeSummary|null $BillingModeSummary
 * @property string|null $CreationDateTime
 * @property list<AwsDynamoDbTableGlobalSecondaryIndex>|null $GlobalSecondaryIndexes
 * @property string|null $GlobalTableVersion
 * @property int|null $ItemCount
 * @property list<AwsDynamoDbTableKeySchema>|null $KeySchema
 * @property string|null $LatestStreamArn
 * @property string|null $LatestStreamLabel
 * @property list<AwsDynamoDbTableLocalSecondaryIndex>|null $LocalSecondaryIndexes
 * @property AwsDynamoDbTableProvisionedThroughput|null $ProvisionedThroughput
 * @property list<AwsDynamoDbTableReplica>|null $Replicas
 * @property AwsDynamoDbTableRestoreSummary|null $RestoreSummary
 * @property AwsDynamoDbTableSseDescription|null $SseDescription
 * @property AwsDynamoDbTableStreamSpecification|null $StreamSpecification
 * @property string|null $TableId
 * @property string|null $TableName
 * @property int|null $TableSizeBytes
 * @property string|null $TableStatus
 * @property bool|null $DeletionProtectionEnabled
 */
class AwsDynamoDbTableDetails extends Shape
{
    /**
     * @param array{
     *     AttributeDefinitions?: list<AwsDynamoDbTableAttributeDefinition>|null,
     *     BillingModeSummary?: AwsDynamoDbTableBillingModeSummary|null,
     *     CreationDateTime?: string|null,
     *     GlobalSecondaryIndexes?: list<AwsDynamoDbTableGlobalSecondaryIndex>|null,
     *     GlobalTableVersion?: string|null,
     *     ItemCount?: int|null,
     *     KeySchema?: list<AwsDynamoDbTableKeySchema>|null,
     *     LatestStreamArn?: string|null,
     *     LatestStreamLabel?: string|null,
     *     LocalSecondaryIndexes?: list<AwsDynamoDbTableLocalSecondaryIndex>|null,
     *     ProvisionedThroughput?: AwsDynamoDbTableProvisionedThroughput|null,
     *     Replicas?: list<AwsDynamoDbTableReplica>|null,
     *     RestoreSummary?: AwsDynamoDbTableRestoreSummary|null,
     *     SseDescription?: AwsDynamoDbTableSseDescription|null,
     *     StreamSpecification?: AwsDynamoDbTableStreamSpecification|null,
     *     TableId?: string|null,
     *     TableName?: string|null,
     *     TableSizeBytes?: int|null,
     *     TableStatus?: string|null,
     *     DeletionProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsDynamoDbTableAttributeDefinition> $AttributeDefinitions
 * @property AwsDynamoDbTableBillingModeSummary $BillingModeSummary
 * @property string $CreationDateTime
 * @property list<AwsDynamoDbTableGlobalSecondaryIndex> $GlobalSecondaryIndexes
 * @property string $GlobalTableVersion
 * @property int $ItemCount
 * @property list<AwsDynamoDbTableKeySchema> $KeySchema
 * @property string $LatestStreamArn
 * @property string $LatestStreamLabel
 * @property list<AwsDynamoDbTableLocalSecondaryIndex> $LocalSecondaryIndexes
 * @property AwsDynamoDbTableProvisionedThroughput $ProvisionedThroughput
 * @property list<AwsDynamoDbTableReplica> $Replicas
 * @property AwsDynamoDbTableRestoreSummary $RestoreSummary
 * @property AwsDynamoDbTableSseDescription $SseDescription
 * @property AwsDynamoDbTableStreamSpecification $StreamSpecification
 * @property string $TableId
 * @property string $TableName
 * @property int $TableSizeBytes
 * @property string $TableStatus
 * @property bool $DeletionProtectionEnabled
 */
class AwsDynamoDbTableDetails extends Shape
{
    /**
     * @param array{
     *     AttributeDefinitions?: list<AwsDynamoDbTableAttributeDefinition>,
     *     BillingModeSummary?: AwsDynamoDbTableBillingModeSummary,
     *     CreationDateTime?: string,
     *     GlobalSecondaryIndexes?: list<AwsDynamoDbTableGlobalSecondaryIndex>,
     *     GlobalTableVersion?: string,
     *     ItemCount?: int,
     *     KeySchema?: list<AwsDynamoDbTableKeySchema>,
     *     LatestStreamArn?: string,
     *     LatestStreamLabel?: string,
     *     LocalSecondaryIndexes?: list<AwsDynamoDbTableLocalSecondaryIndex>,
     *     ProvisionedThroughput?: AwsDynamoDbTableProvisionedThroughput,
     *     Replicas?: list<AwsDynamoDbTableReplica>,
     *     RestoreSummary?: AwsDynamoDbTableRestoreSummary,
     *     SseDescription?: AwsDynamoDbTableSseDescription,
     *     StreamSpecification?: AwsDynamoDbTableStreamSpecification,
     *     TableId?: string,
     *     TableName?: string,
     *     TableSizeBytes?: int,
     *     TableStatus?: string,
     *     DeletionProtectionEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

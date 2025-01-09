<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Backfilling
 * @property string $IndexArn
 * @property string $IndexName
 * @property int $IndexSizeBytes
 * @property string $IndexStatus
 * @property int $ItemCount
 * @property list<AwsDynamoDbTableKeySchema> $KeySchema
 * @property AwsDynamoDbTableProjection $Projection
 * @property AwsDynamoDbTableProvisionedThroughput $ProvisionedThroughput
 */
class AwsDynamoDbTableGlobalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     Backfilling?: bool,
     *     IndexArn?: string,
     *     IndexName?: string,
     *     IndexSizeBytes?: int,
     *     IndexStatus?: string,
     *     ItemCount?: int,
     *     KeySchema?: list<AwsDynamoDbTableKeySchema>,
     *     Projection?: AwsDynamoDbTableProjection,
     *     ProvisionedThroughput?: AwsDynamoDbTableProvisionedThroughput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

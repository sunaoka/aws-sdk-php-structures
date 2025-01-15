<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Backfilling
 * @property string|null $IndexArn
 * @property string|null $IndexName
 * @property int|null $IndexSizeBytes
 * @property string|null $IndexStatus
 * @property int|null $ItemCount
 * @property list<AwsDynamoDbTableKeySchema>|null $KeySchema
 * @property AwsDynamoDbTableProjection|null $Projection
 * @property AwsDynamoDbTableProvisionedThroughput|null $ProvisionedThroughput
 */
class AwsDynamoDbTableGlobalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     Backfilling?: bool|null,
     *     IndexArn?: string|null,
     *     IndexName?: string|null,
     *     IndexSizeBytes?: int|null,
     *     IndexStatus?: string|null,
     *     ItemCount?: int|null,
     *     KeySchema?: list<AwsDynamoDbTableKeySchema>|null,
     *     Projection?: AwsDynamoDbTableProjection|null,
     *     ProvisionedThroughput?: AwsDynamoDbTableProvisionedThroughput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

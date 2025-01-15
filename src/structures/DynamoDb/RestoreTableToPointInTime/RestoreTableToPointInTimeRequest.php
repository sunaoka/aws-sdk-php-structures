<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceTableArn
 * @property string|null $SourceTableName
 * @property string $TargetTableName
 * @property bool|null $UseLatestRestorableTime
 * @property \Aws\Api\DateTimeResult|null $RestoreDateTime
 * @property 'PROVISIONED'|'PAY_PER_REQUEST'|null $BillingModeOverride
 * @property list<Shapes\GlobalSecondaryIndex>|null $GlobalSecondaryIndexOverride
 * @property list<Shapes\LocalSecondaryIndex>|null $LocalSecondaryIndexOverride
 * @property Shapes\ProvisionedThroughput|null $ProvisionedThroughputOverride
 * @property Shapes\OnDemandThroughput|null $OnDemandThroughputOverride
 * @property Shapes\SSESpecification|null $SSESpecificationOverride
 */
class RestoreTableToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     SourceTableArn?: string|null,
     *     SourceTableName?: string|null,
     *     TargetTableName: string,
     *     UseLatestRestorableTime?: bool|null,
     *     RestoreDateTime?: \Aws\Api\DateTimeResult|null,
     *     BillingModeOverride?: 'PROVISIONED'|'PAY_PER_REQUEST'|null,
     *     GlobalSecondaryIndexOverride?: list<Shapes\GlobalSecondaryIndex>|null,
     *     LocalSecondaryIndexOverride?: list<Shapes\LocalSecondaryIndex>|null,
     *     ProvisionedThroughputOverride?: Shapes\ProvisionedThroughput|null,
     *     OnDemandThroughputOverride?: Shapes\OnDemandThroughput|null,
     *     SSESpecificationOverride?: Shapes\SSESpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

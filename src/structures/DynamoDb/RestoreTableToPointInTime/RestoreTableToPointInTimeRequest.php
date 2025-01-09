<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceTableArn
 * @property string $SourceTableName
 * @property string $TargetTableName
 * @property bool $UseLatestRestorableTime
 * @property \Aws\Api\DateTimeResult $RestoreDateTime
 * @property 'PROVISIONED'|'PAY_PER_REQUEST' $BillingModeOverride
 * @property list<Shapes\GlobalSecondaryIndex> $GlobalSecondaryIndexOverride
 * @property list<Shapes\LocalSecondaryIndex> $LocalSecondaryIndexOverride
 * @property Shapes\ProvisionedThroughput $ProvisionedThroughputOverride
 * @property Shapes\OnDemandThroughput $OnDemandThroughputOverride
 * @property Shapes\SSESpecification $SSESpecificationOverride
 */
class RestoreTableToPointInTimeRequest extends Request
{
    /**
     * @param array{
     *     SourceTableArn?: string,
     *     SourceTableName?: string,
     *     TargetTableName: string,
     *     UseLatestRestorableTime?: bool,
     *     RestoreDateTime?: \Aws\Api\DateTimeResult,
     *     BillingModeOverride?: 'PROVISIONED'|'PAY_PER_REQUEST',
     *     GlobalSecondaryIndexOverride?: list<Shapes\GlobalSecondaryIndex>,
     *     LocalSecondaryIndexOverride?: list<Shapes\LocalSecondaryIndex>,
     *     ProvisionedThroughputOverride?: Shapes\ProvisionedThroughput,
     *     OnDemandThroughputOverride?: Shapes\OnDemandThroughput,
     *     SSESpecificationOverride?: Shapes\SSESpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableFromBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetTableName
 * @property string $BackupArn
 * @property 'PROVISIONED'|'PAY_PER_REQUEST' $BillingModeOverride
 * @property list<Shapes\GlobalSecondaryIndex> $GlobalSecondaryIndexOverride
 * @property list<Shapes\LocalSecondaryIndex> $LocalSecondaryIndexOverride
 * @property Shapes\ProvisionedThroughput $ProvisionedThroughputOverride
 * @property Shapes\OnDemandThroughput $OnDemandThroughputOverride
 * @property Shapes\SSESpecification $SSESpecificationOverride
 */
class RestoreTableFromBackupRequest extends Request
{
    /**
     * @param array{
     *     TargetTableName: string,
     *     BackupArn: string,
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

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableFromBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetTableName
 * @property string $BackupArn
 * @property 'PROVISIONED'|'PAY_PER_REQUEST'|null $BillingModeOverride
 * @property list<Shapes\GlobalSecondaryIndex>|null $GlobalSecondaryIndexOverride
 * @property list<Shapes\LocalSecondaryIndex>|null $LocalSecondaryIndexOverride
 * @property Shapes\ProvisionedThroughput|null $ProvisionedThroughputOverride
 * @property Shapes\OnDemandThroughput|null $OnDemandThroughputOverride
 * @property Shapes\SSESpecification|null $SSESpecificationOverride
 */
class RestoreTableFromBackupRequest extends Request
{
    /**
     * @param array{
     *     TargetTableName: string,
     *     BackupArn: string,
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

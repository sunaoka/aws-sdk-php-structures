<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AttributeDefinition>|null $AttributeDefinitions
 * @property string $TableName
 * @property 'PROVISIONED'|'PAY_PER_REQUEST'|null $BillingMode
 * @property Shapes\ProvisionedThroughput|null $ProvisionedThroughput
 * @property list<Shapes\GlobalSecondaryIndexUpdate>|null $GlobalSecondaryIndexUpdates
 * @property Shapes\StreamSpecification|null $StreamSpecification
 * @property Shapes\SSESpecification|null $SSESpecification
 * @property list<Shapes\ReplicationGroupUpdate>|null $ReplicaUpdates
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null $TableClass
 * @property bool|null $DeletionProtectionEnabled
 * @property 'EVENTUAL'|'STRONG'|null $MultiRegionConsistency
 * @property list<Shapes\GlobalTableWitnessGroupUpdate>|null $GlobalTableWitnessUpdates
 * @property Shapes\OnDemandThroughput|null $OnDemandThroughput
 * @property Shapes\WarmThroughput|null $WarmThroughput
 * @property 'ENABLED'|'DISABLED'|'ENABLED_WITH_OVERRIDES'|null $GlobalTableSettingsReplicationMode
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     AttributeDefinitions?: list<Shapes\AttributeDefinition>|null,
     *     TableName: string,
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST'|null,
     *     ProvisionedThroughput?: Shapes\ProvisionedThroughput|null,
     *     GlobalSecondaryIndexUpdates?: list<Shapes\GlobalSecondaryIndexUpdate>|null,
     *     StreamSpecification?: Shapes\StreamSpecification|null,
     *     SSESpecification?: Shapes\SSESpecification|null,
     *     ReplicaUpdates?: list<Shapes\ReplicationGroupUpdate>|null,
     *     TableClass?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null,
     *     DeletionProtectionEnabled?: bool|null,
     *     MultiRegionConsistency?: 'EVENTUAL'|'STRONG'|null,
     *     GlobalTableWitnessUpdates?: list<Shapes\GlobalTableWitnessGroupUpdate>|null,
     *     OnDemandThroughput?: Shapes\OnDemandThroughput|null,
     *     WarmThroughput?: Shapes\WarmThroughput|null,
     *     GlobalTableSettingsReplicationMode?: 'ENABLED'|'DISABLED'|'ENABLED_WITH_OVERRIDES'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

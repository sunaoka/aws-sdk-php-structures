<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AttributeDefinition> $AttributeDefinitions
 * @property string $TableName
 * @property 'PROVISIONED'|'PAY_PER_REQUEST' $BillingMode
 * @property Shapes\ProvisionedThroughput $ProvisionedThroughput
 * @property list<Shapes\GlobalSecondaryIndexUpdate> $GlobalSecondaryIndexUpdates
 * @property Shapes\StreamSpecification $StreamSpecification
 * @property Shapes\SSESpecification $SSESpecification
 * @property list<Shapes\ReplicationGroupUpdate> $ReplicaUpdates
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS' $TableClass
 * @property bool $DeletionProtectionEnabled
 * @property 'EVENTUAL'|'STRONG' $MultiRegionConsistency
 * @property Shapes\OnDemandThroughput $OnDemandThroughput
 * @property Shapes\WarmThroughput $WarmThroughput
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     AttributeDefinitions?: list<Shapes\AttributeDefinition>,
     *     TableName: string,
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST',
     *     ProvisionedThroughput?: Shapes\ProvisionedThroughput,
     *     GlobalSecondaryIndexUpdates?: list<Shapes\GlobalSecondaryIndexUpdate>,
     *     StreamSpecification?: Shapes\StreamSpecification,
     *     SSESpecification?: Shapes\SSESpecification,
     *     ReplicaUpdates?: list<Shapes\ReplicationGroupUpdate>,
     *     TableClass?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS',
     *     DeletionProtectionEnabled?: bool,
     *     MultiRegionConsistency?: 'EVENTUAL'|'STRONG',
     *     OnDemandThroughput?: Shapes\OnDemandThroughput,
     *     WarmThroughput?: Shapes\WarmThroughput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

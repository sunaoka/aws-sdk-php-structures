<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $keyspaceName
 * @property string $tableName
 * @property string $resourceArn
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'RESTORING'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|null $status
 * @property Shapes\SchemaDefinition|null $schemaDefinition
 * @property Shapes\CapacitySpecificationSummary|null $capacitySpecification
 * @property Shapes\EncryptionSpecification|null $encryptionSpecification
 * @property Shapes\PointInTimeRecoverySummary|null $pointInTimeRecovery
 * @property Shapes\TimeToLive|null $ttl
 * @property int<0, 630720000>|null $defaultTimeToLive
 * @property Shapes\Comment|null $comment
 * @property Shapes\ClientSideTimestamps|null $clientSideTimestamps
 * @property list<Shapes\ReplicaSpecificationSummary>|null $replicaSpecifications
 * @property string|null $latestStreamArn
 * @property Shapes\CdcSpecificationSummary|null $cdcSpecification
 */
class GetTableResponse extends Response
{
}

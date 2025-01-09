<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $keyspaceName
 * @property string $tableName
 * @property string $resourceArn
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'RESTORING'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS' $status
 * @property Shapes\SchemaDefinition $schemaDefinition
 * @property Shapes\CapacitySpecificationSummary $capacitySpecification
 * @property Shapes\EncryptionSpecification $encryptionSpecification
 * @property Shapes\PointInTimeRecoverySummary $pointInTimeRecovery
 * @property Shapes\TimeToLive $ttl
 * @property int<0, 630720000> $defaultTimeToLive
 * @property Shapes\Comment $comment
 * @property Shapes\ClientSideTimestamps $clientSideTimestamps
 * @property list<Shapes\ReplicaSpecificationSummary> $replicaSpecifications
 */
class GetTableResponse extends Response
{
}

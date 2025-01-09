<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property string $tableName
 * @property Shapes\SchemaDefinition $schemaDefinition
 * @property Shapes\Comment $comment
 * @property Shapes\CapacitySpecification $capacitySpecification
 * @property Shapes\EncryptionSpecification $encryptionSpecification
 * @property Shapes\PointInTimeRecovery $pointInTimeRecovery
 * @property Shapes\TimeToLive $ttl
 * @property int<0, 630720000> $defaultTimeToLive
 * @property list<Shapes\Tag> $tags
 * @property Shapes\ClientSideTimestamps $clientSideTimestamps
 * @property Shapes\AutoScalingSpecification $autoScalingSpecification
 * @property list<Shapes\ReplicaSpecification> $replicaSpecifications
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     tableName: string,
     *     schemaDefinition: Shapes\SchemaDefinition,
     *     comment?: Shapes\Comment,
     *     capacitySpecification?: Shapes\CapacitySpecification,
     *     encryptionSpecification?: Shapes\EncryptionSpecification,
     *     pointInTimeRecovery?: Shapes\PointInTimeRecovery,
     *     ttl?: Shapes\TimeToLive,
     *     defaultTimeToLive?: int<0, 630720000>,
     *     tags?: list<Shapes\Tag>,
     *     clientSideTimestamps?: Shapes\ClientSideTimestamps,
     *     autoScalingSpecification?: Shapes\AutoScalingSpecification,
     *     replicaSpecifications?: list<Shapes\ReplicaSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

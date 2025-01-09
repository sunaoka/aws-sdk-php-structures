<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property string $tableName
 * @property list<Shapes\ColumnDefinition> $addColumns
 * @property Shapes\CapacitySpecification $capacitySpecification
 * @property Shapes\EncryptionSpecification $encryptionSpecification
 * @property Shapes\PointInTimeRecovery $pointInTimeRecovery
 * @property Shapes\TimeToLive $ttl
 * @property int<0, 630720000> $defaultTimeToLive
 * @property Shapes\ClientSideTimestamps $clientSideTimestamps
 * @property Shapes\AutoScalingSpecification $autoScalingSpecification
 * @property list<Shapes\ReplicaSpecification> $replicaSpecifications
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     tableName: string,
     *     addColumns?: list<Shapes\ColumnDefinition>,
     *     capacitySpecification?: Shapes\CapacitySpecification,
     *     encryptionSpecification?: Shapes\EncryptionSpecification,
     *     pointInTimeRecovery?: Shapes\PointInTimeRecovery,
     *     ttl?: Shapes\TimeToLive,
     *     defaultTimeToLive?: int<0, 630720000>,
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

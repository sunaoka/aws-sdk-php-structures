<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property string $tableName
 * @property list<Shapes\ColumnDefinition>|null $addColumns
 * @property Shapes\CapacitySpecification|null $capacitySpecification
 * @property Shapes\EncryptionSpecification|null $encryptionSpecification
 * @property Shapes\PointInTimeRecovery|null $pointInTimeRecovery
 * @property Shapes\TimeToLive|null $ttl
 * @property int<0, 630720000>|null $defaultTimeToLive
 * @property Shapes\ClientSideTimestamps|null $clientSideTimestamps
 * @property Shapes\AutoScalingSpecification|null $autoScalingSpecification
 * @property list<Shapes\ReplicaSpecification>|null $replicaSpecifications
 * @property Shapes\CdcSpecification|null $cdcSpecification
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     tableName: string,
     *     addColumns?: list<Shapes\ColumnDefinition>|null,
     *     capacitySpecification?: Shapes\CapacitySpecification|null,
     *     encryptionSpecification?: Shapes\EncryptionSpecification|null,
     *     pointInTimeRecovery?: Shapes\PointInTimeRecovery|null,
     *     ttl?: Shapes\TimeToLive|null,
     *     defaultTimeToLive?: int<0, 630720000>|null,
     *     clientSideTimestamps?: Shapes\ClientSideTimestamps|null,
     *     autoScalingSpecification?: Shapes\AutoScalingSpecification|null,
     *     replicaSpecifications?: list<Shapes\ReplicaSpecification>|null,
     *     cdcSpecification?: Shapes\CdcSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

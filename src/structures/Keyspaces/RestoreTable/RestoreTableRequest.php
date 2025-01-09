<?php

namespace Sunaoka\Aws\Structures\Keyspaces\RestoreTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceKeyspaceName
 * @property string $sourceTableName
 * @property string $targetKeyspaceName
 * @property string $targetTableName
 * @property \Aws\Api\DateTimeResult $restoreTimestamp
 * @property Shapes\CapacitySpecification $capacitySpecificationOverride
 * @property Shapes\EncryptionSpecification $encryptionSpecificationOverride
 * @property Shapes\PointInTimeRecovery $pointInTimeRecoveryOverride
 * @property list<Shapes\Tag> $tagsOverride
 * @property Shapes\AutoScalingSpecification $autoScalingSpecification
 * @property list<Shapes\ReplicaSpecification> $replicaSpecifications
 */
class RestoreTableRequest extends Request
{
    /**
     * @param array{
     *     sourceKeyspaceName: string,
     *     sourceTableName: string,
     *     targetKeyspaceName: string,
     *     targetTableName: string,
     *     restoreTimestamp?: \Aws\Api\DateTimeResult,
     *     capacitySpecificationOverride?: Shapes\CapacitySpecification,
     *     encryptionSpecificationOverride?: Shapes\EncryptionSpecification,
     *     pointInTimeRecoveryOverride?: Shapes\PointInTimeRecovery,
     *     tagsOverride?: list<Shapes\Tag>,
     *     autoScalingSpecification?: Shapes\AutoScalingSpecification,
     *     replicaSpecifications?: list<Shapes\ReplicaSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

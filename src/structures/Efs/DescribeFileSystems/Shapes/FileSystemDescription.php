<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $CreationToken
 * @property string $FileSystemId
 * @property string $FileSystemArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 * @property string $Name
 * @property int $NumberOfMountTargets
 * @property FileSystemSize $SizeInBytes
 * @property 'generalPurpose'|'maxIO' $PerformanceMode
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property 'bursting'|'provisioned'|'elastic' $ThroughputMode
 * @property double $ProvisionedThroughputInMibps
 * @property string $AvailabilityZoneName
 * @property string $AvailabilityZoneId
 * @property list<Tag> $Tags
 * @property FileSystemProtectionDescription $FileSystemProtection
 */
class FileSystemDescription extends Shape
{
    /**
     * @param array{
     *     OwnerId: string,
     *     CreationToken: string,
     *     FileSystemId: string,
     *     FileSystemArn?: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LifeCycleState: 'creating'|'available'|'updating'|'deleting'|'deleted'|'error',
     *     Name?: string,
     *     NumberOfMountTargets: int,
     *     SizeInBytes: FileSystemSize,
     *     PerformanceMode: 'generalPurpose'|'maxIO',
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     ThroughputMode?: 'bursting'|'provisioned'|'elastic',
     *     ProvisionedThroughputInMibps?: double,
     *     AvailabilityZoneName?: string,
     *     AvailabilityZoneId?: string,
     *     Tags: list<Tag>,
     *     FileSystemProtection?: FileSystemProtectionDescription
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

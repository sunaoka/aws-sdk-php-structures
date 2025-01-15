<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeFileSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $CreationToken
 * @property string $FileSystemId
 * @property string|null $FileSystemArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 * @property string|null $Name
 * @property int<0, max> $NumberOfMountTargets
 * @property FileSystemSize $SizeInBytes
 * @property 'generalPurpose'|'maxIO' $PerformanceMode
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property 'bursting'|'provisioned'|'elastic'|null $ThroughputMode
 * @property double|null $ProvisionedThroughputInMibps
 * @property string|null $AvailabilityZoneName
 * @property string|null $AvailabilityZoneId
 * @property list<Tag> $Tags
 * @property FileSystemProtectionDescription|null $FileSystemProtection
 */
class FileSystemDescription extends Shape
{
    /**
     * @param array{
     *     OwnerId: string,
     *     CreationToken: string,
     *     FileSystemId: string,
     *     FileSystemArn?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LifeCycleState: 'creating'|'available'|'updating'|'deleting'|'deleted'|'error',
     *     Name?: string|null,
     *     NumberOfMountTargets: int<0, max>,
     *     SizeInBytes: FileSystemSize,
     *     PerformanceMode: 'generalPurpose'|'maxIO',
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     ThroughputMode?: 'bursting'|'provisioned'|'elastic'|null,
     *     ProvisionedThroughputInMibps?: double|null,
     *     AvailabilityZoneName?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Tags: list<Tag>,
     *     FileSystemProtection?: FileSystemProtectionDescription|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

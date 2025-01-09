<?php

namespace Sunaoka\Aws\Structures\Efs\CreateFileSystem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OwnerId
 * @property string $CreationToken
 * @property string $FileSystemId
 * @property string $FileSystemArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 * @property string $Name
 * @property int<0, max> $NumberOfMountTargets
 * @property Shapes\FileSystemSize $SizeInBytes
 * @property 'generalPurpose'|'maxIO' $PerformanceMode
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property 'bursting'|'provisioned'|'elastic' $ThroughputMode
 * @property double $ProvisionedThroughputInMibps
 * @property string $AvailabilityZoneName
 * @property string $AvailabilityZoneId
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\FileSystemProtectionDescription $FileSystemProtection
 */
class CreateFileSystemResponse extends Response
{
}

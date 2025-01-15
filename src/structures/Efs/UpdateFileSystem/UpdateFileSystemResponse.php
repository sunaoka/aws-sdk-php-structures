<?php

namespace Sunaoka\Aws\Structures\Efs\UpdateFileSystem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OwnerId
 * @property string $CreationToken
 * @property string $FileSystemId
 * @property string|null $FileSystemArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 * @property string|null $Name
 * @property int<0, max> $NumberOfMountTargets
 * @property Shapes\FileSystemSize $SizeInBytes
 * @property 'generalPurpose'|'maxIO' $PerformanceMode
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property 'bursting'|'provisioned'|'elastic'|null $ThroughputMode
 * @property double|null $ProvisionedThroughputInMibps
 * @property string|null $AvailabilityZoneName
 * @property string|null $AvailabilityZoneId
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\FileSystemProtectionDescription|null $FileSystemProtection
 */
class UpdateFileSystemResponse extends Response
{
}

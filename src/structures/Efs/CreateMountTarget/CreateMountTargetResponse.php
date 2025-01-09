<?php

namespace Sunaoka\Aws\Structures\Efs\CreateMountTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OwnerId
 * @property string $MountTargetId
 * @property string $FileSystemId
 * @property string $SubnetId
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 * @property string $IpAddress
 * @property string $NetworkInterfaceId
 * @property string $AvailabilityZoneId
 * @property string $AvailabilityZoneName
 * @property string $VpcId
 */
class CreateMountTargetResponse extends Response
{
}

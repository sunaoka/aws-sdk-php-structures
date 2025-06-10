<?php

namespace Sunaoka\Aws\Structures\Efs\CreateMountTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $OwnerId
 * @property string $MountTargetId
 * @property string $FileSystemId
 * @property string $SubnetId
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 * @property string|null $IpAddress
 * @property string|null $Ipv6Address
 * @property string|null $NetworkInterfaceId
 * @property string|null $AvailabilityZoneId
 * @property string|null $AvailabilityZoneName
 * @property string|null $VpcId
 */
class CreateMountTargetResponse extends Response
{
}

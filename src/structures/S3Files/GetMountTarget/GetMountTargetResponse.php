<?php

namespace Sunaoka\Aws\Structures\S3Files\GetMountTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $availabilityZoneId
 * @property string $ownerId
 * @property string $mountTargetId
 * @property string|null $fileSystemId
 * @property string $subnetId
 * @property string|null $ipv4Address
 * @property string|null $ipv6Address
 * @property string|null $networkInterfaceId
 * @property string|null $vpcId
 * @property list<string>|null $securityGroups
 * @property 'available'|'creating'|'deleting'|'deleted'|'error'|'updating'|null $status
 * @property string|null $statusMessage
 */
class GetMountTargetResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProductCode>|null $ProductCodes
 * @property string|null $SnapshotId
 * @property list<Shapes\CreateVolumePermission>|null $CreateVolumePermissions
 */
class DescribeSnapshotAttributeResponse extends Response
{
}

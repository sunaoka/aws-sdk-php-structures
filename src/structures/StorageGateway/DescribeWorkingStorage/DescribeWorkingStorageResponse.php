<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeWorkingStorage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property list<string>|null $DiskIds
 * @property int|null $WorkingStorageUsedInBytes
 * @property int|null $WorkingStorageAllocatedInBytes
 */
class DescribeWorkingStorageResponse extends Response
{
}

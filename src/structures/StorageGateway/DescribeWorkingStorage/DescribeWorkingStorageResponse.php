<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeWorkingStorage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property list<string> $DiskIds
 * @property int $WorkingStorageUsedInBytes
 * @property int $WorkingStorageAllocatedInBytes
 */
class DescribeWorkingStorageResponse extends Response
{
}

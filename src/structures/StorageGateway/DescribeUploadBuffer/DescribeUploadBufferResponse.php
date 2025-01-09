<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeUploadBuffer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property list<string> $DiskIds
 * @property int $UploadBufferUsedInBytes
 * @property int $UploadBufferAllocatedInBytes
 */
class DescribeUploadBufferResponse extends Response
{
}

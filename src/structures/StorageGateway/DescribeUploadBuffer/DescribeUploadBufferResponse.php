<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeUploadBuffer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property list<string>|null $DiskIds
 * @property int|null $UploadBufferUsedInBytes
 * @property int|null $UploadBufferAllocatedInBytes
 */
class DescribeUploadBufferResponse extends Response
{
}

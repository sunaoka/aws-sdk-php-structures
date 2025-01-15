<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOntap;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property Shapes\FsxProtocol|null $Protocol
 * @property list<string>|null $SecurityGroupArns
 * @property string|null $StorageVirtualMachineArn
 * @property string|null $FsxFilesystemArn
 */
class DescribeLocationFsxOntapResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOntap;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $LocationArn
 * @property string $LocationUri
 * @property Shapes\FsxProtocol $Protocol
 * @property list<string> $SecurityGroupArns
 * @property string $StorageVirtualMachineArn
 * @property string $FsxFilesystemArn
 */
class DescribeLocationFsxOntapResponse extends Response
{
}

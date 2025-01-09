<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOpenZfs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 * @property list<string> $SecurityGroupArns
 * @property Shapes\FsxProtocol $Protocol
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeLocationFsxOpenZfsResponse extends Response
{
}

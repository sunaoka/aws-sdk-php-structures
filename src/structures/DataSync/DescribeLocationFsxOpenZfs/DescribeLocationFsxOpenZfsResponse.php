<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOpenZfs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property list<string>|null $SecurityGroupArns
 * @property Shapes\FsxProtocol|null $Protocol
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class DescribeLocationFsxOpenZfsResponse extends Response
{
}

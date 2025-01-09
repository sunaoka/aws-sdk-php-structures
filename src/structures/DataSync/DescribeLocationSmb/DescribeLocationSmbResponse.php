<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationSmb;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 * @property list<string> $AgentArns
 * @property string $User
 * @property string $Domain
 * @property Shapes\SmbMountOptions $MountOptions
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeLocationSmbResponse extends Response
{
}

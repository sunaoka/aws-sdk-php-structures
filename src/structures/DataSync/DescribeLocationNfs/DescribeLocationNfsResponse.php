<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationNfs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 * @property Shapes\OnPremConfig $OnPremConfig
 * @property Shapes\NfsMountOptions $MountOptions
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeLocationNfsResponse extends Response
{
}

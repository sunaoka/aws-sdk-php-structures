<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationNfs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property Shapes\OnPremConfig|null $OnPremConfig
 * @property Shapes\NfsMountOptions|null $MountOptions
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class DescribeLocationNfsResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationEfs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 * @property Shapes\Ec2Config|null $Ec2Config
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $AccessPointArn
 * @property string|null $FileSystemAccessRoleArn
 * @property 'NONE'|'TLS1_2'|null $InTransitEncryption
 */
class DescribeLocationEfsResponse extends Response
{
}

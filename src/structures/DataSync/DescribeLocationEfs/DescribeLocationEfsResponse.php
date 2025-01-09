<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationEfs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 * @property Shapes\Ec2Config $Ec2Config
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $AccessPointArn
 * @property string $FileSystemAccessRoleArn
 * @property 'NONE'|'TLS1_2' $InTransitEncryption
 */
class DescribeLocationEfsResponse extends Response
{
}

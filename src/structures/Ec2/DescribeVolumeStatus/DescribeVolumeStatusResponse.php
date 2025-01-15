<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\VolumeStatusItem>|null $VolumeStatuses
 */
class DescribeVolumeStatusResponse extends Response
{
}

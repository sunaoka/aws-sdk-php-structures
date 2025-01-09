<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property list<Shapes\StaleSecurityGroup> $StaleSecurityGroupSet
 */
class DescribeStaleSecurityGroupsResponse extends Response
{
}

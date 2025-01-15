<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\StaleSecurityGroup>|null $StaleSecurityGroupSet
 */
class DescribeStaleSecurityGroupsResponse extends Response
{
}

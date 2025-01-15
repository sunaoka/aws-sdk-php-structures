<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ActiveInstance>|null $ActiveInstances
 * @property string|null $NextToken
 * @property string|null $FleetId
 */
class DescribeFleetInstancesResponse extends Response
{
}

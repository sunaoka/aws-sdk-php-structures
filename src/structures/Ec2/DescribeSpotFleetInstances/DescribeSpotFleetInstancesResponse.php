<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ActiveInstance>|null $ActiveInstances
 * @property string|null $NextToken
 * @property string|null $SpotFleetRequestId
 */
class DescribeSpotFleetInstancesResponse extends Response
{
}

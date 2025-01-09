<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ActiveInstance> $ActiveInstances
 * @property string $NextToken
 * @property string $SpotFleetRequestId
 */
class DescribeSpotFleetInstancesResponse extends Response
{
}

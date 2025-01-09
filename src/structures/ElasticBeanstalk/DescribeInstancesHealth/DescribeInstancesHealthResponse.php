<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SingleInstanceHealth> $InstanceHealthList
 * @property \Aws\Api\DateTimeResult $RefreshedAt
 * @property string $NextToken
 */
class DescribeInstancesHealthResponse extends Response
{
}

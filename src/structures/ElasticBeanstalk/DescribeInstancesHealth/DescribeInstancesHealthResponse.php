<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SingleInstanceHealth>|null $InstanceHealthList
 * @property \Aws\Api\DateTimeResult|null $RefreshedAt
 * @property string|null $NextToken
 */
class DescribeInstancesHealthResponse extends Response
{
}

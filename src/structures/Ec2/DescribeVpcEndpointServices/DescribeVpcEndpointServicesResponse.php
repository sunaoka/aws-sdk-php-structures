<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $ServiceNames
 * @property list<Shapes\ServiceDetail> $ServiceDetails
 * @property string $NextToken
 */
class DescribeVpcEndpointServicesResponse extends Response
{
}

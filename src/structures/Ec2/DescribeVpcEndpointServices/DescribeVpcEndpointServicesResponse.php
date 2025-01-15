<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $ServiceNames
 * @property list<Shapes\ServiceDetail>|null $ServiceDetails
 * @property string|null $NextToken
 */
class DescribeVpcEndpointServicesResponse extends Response
{
}

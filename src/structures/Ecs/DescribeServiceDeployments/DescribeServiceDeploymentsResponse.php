<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ServiceDeployment>|null $serviceDeployments
 * @property list<Shapes\Failure>|null $failures
 */
class DescribeServiceDeploymentsResponse extends Response
{
}

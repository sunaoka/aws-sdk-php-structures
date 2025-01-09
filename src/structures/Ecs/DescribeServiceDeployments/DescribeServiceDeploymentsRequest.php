<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $serviceDeploymentArns
 */
class DescribeServiceDeploymentsRequest extends Request
{
    /**
     * @param array{serviceDeploymentArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

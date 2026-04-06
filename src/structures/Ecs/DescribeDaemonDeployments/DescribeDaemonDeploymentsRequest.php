<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $daemonDeploymentArns
 */
class DescribeDaemonDeploymentsRequest extends Request
{
    /**
     * @param array{daemonDeploymentArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $deploymentIds
 */
class BatchGetDeploymentsRequest extends Request
{
    /**
     * @param array{deploymentIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

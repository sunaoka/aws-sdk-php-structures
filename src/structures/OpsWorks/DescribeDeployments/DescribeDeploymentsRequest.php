<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $AppId
 * @property list<string> $DeploymentIds
 */
class DescribeDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string,
     *     AppId?: string,
     *     DeploymentIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

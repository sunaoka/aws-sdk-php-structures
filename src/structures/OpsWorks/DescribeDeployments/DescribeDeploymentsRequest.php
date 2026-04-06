<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackId
 * @property string|null $AppId
 * @property list<string>|null $DeploymentIds
 */
class DescribeDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     AppId?: string|null,
     *     DeploymentIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

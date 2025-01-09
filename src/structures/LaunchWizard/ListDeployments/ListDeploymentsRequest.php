<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DeploymentFilter> $filters
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\DeploymentFilter>,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeploymentPatternVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 * @property string $deploymentPatternName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\DeploymentPatternVersionFilter>|null $filters
 */
class ListDeploymentPatternVersionsRequest extends Request
{
    /**
     * @param array{
     *     workloadName: string,
     *     deploymentPatternName: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filters?: list<Shapes\DeploymentPatternVersionFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

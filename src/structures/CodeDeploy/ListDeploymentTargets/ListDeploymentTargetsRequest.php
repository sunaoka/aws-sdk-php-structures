<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string|null $nextToken
 * @property array<'TargetStatus'|'ServerInstanceLabel', list<string>>|null $targetFilters
 */
class ListDeploymentTargetsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     nextToken?: string|null,
     *     targetFilters?: array<'TargetStatus'|'ServerInstanceLabel', list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

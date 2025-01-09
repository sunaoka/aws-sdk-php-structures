<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string $nextToken
 * @property array<'TargetStatus'|'ServerInstanceLabel', list<string>> $targetFilters
 */
class ListDeploymentTargetsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     nextToken?: string,
     *     targetFilters?: array<'TargetStatus'|'ServerInstanceLabel', list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

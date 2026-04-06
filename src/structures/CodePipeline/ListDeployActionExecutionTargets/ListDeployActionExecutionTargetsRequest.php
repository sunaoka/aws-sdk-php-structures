<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListDeployActionExecutionTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $pipelineName
 * @property string $actionExecutionId
 * @property list<Shapes\TargetFilter>|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDeployActionExecutionTargetsRequest extends Request
{
    /**
     * @param array{
     *     pipelineName?: string|null,
     *     actionExecutionId: string,
     *     filters?: list<Shapes\TargetFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

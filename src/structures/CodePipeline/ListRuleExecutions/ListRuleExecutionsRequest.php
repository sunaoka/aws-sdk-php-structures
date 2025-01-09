<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property Shapes\RuleExecutionFilter $filter
 * @property int $maxResults
 * @property string $nextToken
 */
class ListRuleExecutionsRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     filter?: Shapes\RuleExecutionFilter,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property Shapes\RuleExecutionFilter|null $filter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListRuleExecutionsRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     filter?: Shapes\RuleExecutionFilter|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

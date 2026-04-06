<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions;

trait ListRuleExecutionsTrait
{
    /**
     * @param ListRuleExecutionsRequest $args
     * @return ListRuleExecutionsResponse
     */
    public function listRuleExecutions(ListRuleExecutionsRequest $args)
    {
        $result = parent::listRuleExecutions($args->toArray());
        return new ListRuleExecutionsResponse($result->toArray());
    }
}

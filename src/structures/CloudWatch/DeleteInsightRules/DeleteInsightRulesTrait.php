<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteInsightRules;

trait DeleteInsightRulesTrait
{
    /**
     * @param DeleteInsightRulesRequest $args
     * @return DeleteInsightRulesResponse
     */
    public function deleteInsightRules(DeleteInsightRulesRequest $args)
    {
        $result = parent::deleteInsightRules($args->toArray());
        return new DeleteInsightRulesResponse($result->toArray());
    }
}

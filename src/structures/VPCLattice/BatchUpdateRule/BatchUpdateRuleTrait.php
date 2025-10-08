<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule;

trait BatchUpdateRuleTrait
{
    /**
     * @param BatchUpdateRuleRequest $args
     * @return BatchUpdateRuleResponse
     */
    public function batchUpdateRule(BatchUpdateRuleRequest $args)
    {
        $result = parent::batchUpdateRule($args->toArray());
        return new BatchUpdateRuleResponse($result->toArray());
    }
}

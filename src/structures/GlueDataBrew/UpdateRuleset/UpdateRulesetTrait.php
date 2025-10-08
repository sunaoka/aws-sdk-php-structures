<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRuleset;

trait UpdateRulesetTrait
{
    /**
     * @param UpdateRulesetRequest $args
     * @return UpdateRulesetResponse
     */
    public function updateRuleset(UpdateRulesetRequest $args)
    {
        $result = parent::updateRuleset($args->toArray());
        return new UpdateRulesetResponse($result->toArray());
    }
}

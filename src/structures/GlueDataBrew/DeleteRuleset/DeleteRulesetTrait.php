<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DeleteRuleset;

trait DeleteRulesetTrait
{
    /**
     * @param DeleteRulesetRequest $args
     * @return DeleteRulesetResponse
     */
    public function deleteRuleset(DeleteRulesetRequest $args)
    {
        $result = parent::deleteRuleset($args->toArray());
        return new DeleteRulesetResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet;

trait UpdateRuleSetTrait
{
    /**
     * @param UpdateRuleSetRequest $args
     * @return UpdateRuleSetResponse
     */
    public function updateRuleSet(UpdateRuleSetRequest $args)
    {
        $result = parent::updateRuleSet($args->toArray());
        return new UpdateRuleSetResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet;

trait GetRuleSetTrait
{
    /**
     * @param GetRuleSetRequest $args
     * @return GetRuleSetResponse
     */
    public function getRuleSet(GetRuleSetRequest $args)
    {
        $result = parent::getRuleSet($args->toArray());
        return new GetRuleSetResponse($result->toArray());
    }
}

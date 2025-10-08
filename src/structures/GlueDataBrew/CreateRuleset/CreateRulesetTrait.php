<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRuleset;

trait CreateRulesetTrait
{
    /**
     * @param CreateRulesetRequest $args
     * @return CreateRulesetResponse
     */
    public function createRuleset(CreateRulesetRequest $args)
    {
        $result = parent::createRuleset($args->toArray());
        return new CreateRulesetResponse($result->toArray());
    }
}

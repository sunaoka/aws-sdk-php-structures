<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListSipRules;

trait ListSipRulesTrait
{
    /**
     * @param ListSipRulesRequest $args
     * @return ListSipRulesResponse
     */
    public function listSipRules(ListSipRulesRequest $args)
    {
        $result = parent::listSipRules($args->toArray());
        return new ListSipRulesResponse($result->toArray());
    }
}

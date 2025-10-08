<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteSipRule;

trait DeleteSipRuleTrait
{
    /**
     * @param DeleteSipRuleRequest $args
     * @return void
     */
    public function deleteSipRule(DeleteSipRuleRequest $args)
    {
        parent::deleteSipRule($args->toArray());
    }
}

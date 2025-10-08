<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConfigRule;

trait DeleteConfigRuleTrait
{
    /**
     * @param DeleteConfigRuleRequest $args
     * @return void
     */
    public function deleteConfigRule(DeleteConfigRuleRequest $args)
    {
        parent::deleteConfigRule($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigRule;

trait PutConfigRuleTrait
{
    /**
     * @param PutConfigRuleRequest $args
     * @return void
     */
    public function putConfigRule(PutConfigRuleRequest $args)
    {
        parent::putConfigRule($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\DisableTopicRule;

trait DisableTopicRuleTrait
{
    /**
     * @param DisableTopicRuleRequest $args
     * @return void
     */
    public function disableTopicRule(DisableTopicRuleRequest $args)
    {
        parent::disableTopicRule($args->toArray());
    }
}

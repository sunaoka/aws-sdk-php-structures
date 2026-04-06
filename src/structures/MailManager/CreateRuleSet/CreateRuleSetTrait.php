<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet;

trait CreateRuleSetTrait
{
    /**
     * @param CreateRuleSetRequest $args
     * @return CreateRuleSetResponse
     */
    public function createRuleSet(CreateRuleSetRequest $args)
    {
        $result = parent::createRuleSet($args->toArray());
        return new CreateRuleSetResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteRuleSet;

trait DeleteRuleSetTrait
{
    /**
     * @param DeleteRuleSetRequest $args
     * @return DeleteRuleSetResponse
     */
    public function deleteRuleSet(DeleteRuleSetRequest $args)
    {
        $result = parent::deleteRuleSet($args->toArray());
        return new DeleteRuleSetResponse($result->toArray());
    }
}

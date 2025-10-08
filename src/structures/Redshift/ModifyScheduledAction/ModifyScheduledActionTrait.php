<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyScheduledAction;

trait ModifyScheduledActionTrait
{
    /**
     * @param ModifyScheduledActionRequest $args
     * @return ModifyScheduledActionResponse
     */
    public function modifyScheduledAction(ModifyScheduledActionRequest $args)
    {
        $result = parent::modifyScheduledAction($args->toArray());
        return new ModifyScheduledActionResponse($result->toArray());
    }
}

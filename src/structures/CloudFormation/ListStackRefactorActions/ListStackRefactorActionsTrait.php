<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackRefactorActions;

trait ListStackRefactorActionsTrait
{
    /**
     * @param ListStackRefactorActionsRequest $args
     * @return ListStackRefactorActionsResponse
     */
    public function listStackRefactorActions(ListStackRefactorActionsRequest $args)
    {
        $result = parent::listStackRefactorActions($args->toArray());
        return new ListStackRefactorActionsResponse($result->toArray());
    }
}

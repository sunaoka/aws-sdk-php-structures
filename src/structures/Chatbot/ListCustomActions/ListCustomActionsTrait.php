<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListCustomActions;

trait ListCustomActionsTrait
{
    /**
     * @param ListCustomActionsRequest $args
     * @return ListCustomActionsResponse
     */
    public function listCustomActions(ListCustomActionsRequest $args)
    {
        $result = parent::listCustomActions($args->toArray());
        return new ListCustomActionsResponse($result->toArray());
    }
}

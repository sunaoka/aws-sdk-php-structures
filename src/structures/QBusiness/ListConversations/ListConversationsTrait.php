<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListConversations;

trait ListConversationsTrait
{
    /**
     * @param ListConversationsRequest $args
     * @return ListConversationsResponse
     */
    public function listConversations(ListConversationsRequest $args)
    {
        $result = parent::listConversations($args->toArray());
        return new ListConversationsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages;

trait ListMessagesTrait
{
    /**
     * @param ListMessagesRequest $args
     * @return ListMessagesResponse
     */
    public function listMessages(ListMessagesRequest $args)
    {
        $result = parent::listMessages($args->toArray());
        return new ListMessagesResponse($result->toArray());
    }
}

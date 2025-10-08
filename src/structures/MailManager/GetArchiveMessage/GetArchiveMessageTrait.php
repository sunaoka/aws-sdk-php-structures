<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessage;

trait GetArchiveMessageTrait
{
    /**
     * @param GetArchiveMessageRequest $args
     * @return GetArchiveMessageResponse
     */
    public function getArchiveMessage(GetArchiveMessageRequest $args)
    {
        $result = parent::getArchiveMessage($args->toArray());
        return new GetArchiveMessageResponse($result->toArray());
    }
}

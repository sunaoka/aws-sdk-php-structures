<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessageContent;

trait GetArchiveMessageContentTrait
{
    /**
     * @param GetArchiveMessageContentRequest $args
     * @return GetArchiveMessageContentResponse
     */
    public function getArchiveMessageContent(GetArchiveMessageContentRequest $args)
    {
        $result = parent::getArchiveMessageContent($args->toArray());
        return new GetArchiveMessageContentResponse($result->toArray());
    }
}

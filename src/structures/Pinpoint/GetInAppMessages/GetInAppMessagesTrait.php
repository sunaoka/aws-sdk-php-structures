<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppMessages;

trait GetInAppMessagesTrait
{
    /**
     * @param GetInAppMessagesRequest $args
     * @return GetInAppMessagesResponse
     */
    public function getInAppMessages(GetInAppMessagesRequest $args)
    {
        $result = parent::getInAppMessages($args->toArray());
        return new GetInAppMessagesResponse($result->toArray());
    }
}

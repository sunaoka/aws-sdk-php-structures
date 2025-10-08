<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage;

trait GetNextMessageTrait
{
    /**
     * @param GetNextMessageRequest $args
     * @return GetNextMessageResponse
     */
    public function getNextMessage(GetNextMessageRequest $args)
    {
        $result = parent::getNextMessage($args->toArray());
        return new GetNextMessageResponse($result->toArray());
    }
}

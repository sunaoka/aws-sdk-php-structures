<?php

namespace Sunaoka\Aws\Structures\WorkMailMessageFlow\GetRawMessageContent;

trait GetRawMessageContentTrait
{
    /**
     * @param GetRawMessageContentRequest $args
     * @return GetRawMessageContentResponse
     */
    public function getRawMessageContent(GetRawMessageContentRequest $args)
    {
        $result = parent::getRawMessageContent($args->toArray());
        return new GetRawMessageContentResponse($result->toArray());
    }
}

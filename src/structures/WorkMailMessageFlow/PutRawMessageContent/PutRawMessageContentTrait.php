<?php

namespace Sunaoka\Aws\Structures\WorkMailMessageFlow\PutRawMessageContent;

trait PutRawMessageContentTrait
{
    /**
     * @param PutRawMessageContentRequest $args
     * @return PutRawMessageContentResponse
     */
    public function putRawMessageContent(PutRawMessageContentRequest $args)
    {
        $result = parent::putRawMessageContent($args->toArray());
        return new PutRawMessageContentResponse($result->toArray());
    }
}

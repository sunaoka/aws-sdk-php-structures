<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostContent;

trait PostContentTrait
{
    /**
     * @param PostContentRequest $args
     * @return PostContentResponse
     */
    public function postContent(PostContentRequest $args)
    {
        $result = parent::postContent($args->toArray());
        return new PostContentResponse($result->toArray());
    }
}

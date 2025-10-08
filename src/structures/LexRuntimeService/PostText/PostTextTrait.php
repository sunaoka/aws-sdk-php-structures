<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText;

trait PostTextTrait
{
    /**
     * @param PostTextRequest $args
     * @return PostTextResponse
     */
    public function postText(PostTextRequest $args)
    {
        $result = parent::postText($args->toArray());
        return new PostTextResponse($result->toArray());
    }
}

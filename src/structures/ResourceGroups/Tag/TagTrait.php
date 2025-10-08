<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\Tag;

trait TagTrait
{
    /**
     * @param TagRequest $args
     * @return TagResponse
     */
    public function tag(TagRequest $args)
    {
        $result = parent::tag($args->toArray());
        return new TagResponse($result->toArray());
    }
}

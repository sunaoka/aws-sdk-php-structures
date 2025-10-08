<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateTags;

trait CreateTagsTrait
{
    /**
     * @param CreateTagsRequest $args
     * @return void
     */
    public function createTags(CreateTagsRequest $args)
    {
        parent::createTags($args->toArray());
    }
}

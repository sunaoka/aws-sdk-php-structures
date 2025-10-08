<?php

namespace Sunaoka\Aws\Structures\MQ\CreateTags;

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

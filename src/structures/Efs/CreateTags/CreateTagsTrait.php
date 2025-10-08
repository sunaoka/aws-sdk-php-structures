<?php

namespace Sunaoka\Aws\Structures\Efs\CreateTags;

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

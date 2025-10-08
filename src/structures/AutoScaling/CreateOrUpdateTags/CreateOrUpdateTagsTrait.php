<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateOrUpdateTags;

trait CreateOrUpdateTagsTrait
{
    /**
     * @param CreateOrUpdateTagsRequest $args
     * @return void
     */
    public function createOrUpdateTags(CreateOrUpdateTagsRequest $args)
    {
        parent::createOrUpdateTags($args->toArray());
    }
}

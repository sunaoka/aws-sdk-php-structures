<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTags;

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

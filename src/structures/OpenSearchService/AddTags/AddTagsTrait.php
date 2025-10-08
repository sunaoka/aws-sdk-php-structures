<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddTags;

trait AddTagsTrait
{
    /**
     * @param AddTagsRequest $args
     * @return void
     */
    public function addTags(AddTagsRequest $args)
    {
        parent::addTags($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RemoveTags;

trait RemoveTagsTrait
{
    /**
     * @param RemoveTagsRequest $args
     * @return void
     */
    public function removeTags(RemoveTagsRequest $args)
    {
        parent::removeTags($args->toArray());
    }
}

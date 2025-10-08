<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteTags;

trait DeleteTagsTrait
{
    /**
     * @param DeleteTagsRequest $args
     * @return void
     */
    public function deleteTags(DeleteTagsRequest $args)
    {
        parent::deleteTags($args->toArray());
    }
}

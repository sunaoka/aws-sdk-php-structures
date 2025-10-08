<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTags;

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

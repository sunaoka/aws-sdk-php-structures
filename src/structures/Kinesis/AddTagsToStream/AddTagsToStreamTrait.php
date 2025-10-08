<?php

namespace Sunaoka\Aws\Structures\Kinesis\AddTagsToStream;

trait AddTagsToStreamTrait
{
    /**
     * @param AddTagsToStreamRequest $args
     * @return void
     */
    public function addTagsToStream(AddTagsToStreamRequest $args)
    {
        parent::addTagsToStream($args->toArray());
    }
}

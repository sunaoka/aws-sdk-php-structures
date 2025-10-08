<?php

namespace Sunaoka\Aws\Structures\Kinesis\RemoveTagsFromStream;

trait RemoveTagsFromStreamTrait
{
    /**
     * @param RemoveTagsFromStreamRequest $args
     * @return void
     */
    public function removeTagsFromStream(RemoveTagsFromStreamRequest $args)
    {
        parent::removeTagsFromStream($args->toArray());
    }
}

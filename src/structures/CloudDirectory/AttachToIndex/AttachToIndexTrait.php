<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AttachToIndex;

trait AttachToIndexTrait
{
    /**
     * @param AttachToIndexRequest $args
     * @return AttachToIndexResponse
     */
    public function attachToIndex(AttachToIndexRequest $args)
    {
        $result = parent::attachToIndex($args->toArray());
        return new AttachToIndexResponse($result->toArray());
    }
}

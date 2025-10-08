<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchDelete;

trait BatchDeleteTrait
{
    /**
     * @param BatchDeleteRequest $args
     * @return BatchDeleteResponse
     */
    public function batchDelete(BatchDeleteRequest $args)
    {
        $result = parent::batchDelete($args->toArray());
        return new BatchDeleteResponse($result->toArray());
    }
}

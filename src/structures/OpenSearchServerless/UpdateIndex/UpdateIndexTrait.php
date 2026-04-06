<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateIndex;

trait UpdateIndexTrait
{
    /**
     * @param UpdateIndexRequest $args
     * @return UpdateIndexResponse
     */
    public function updateIndex(UpdateIndexRequest $args)
    {
        $result = parent::updateIndex($args->toArray());
        return new UpdateIndexResponse($result->toArray());
    }
}

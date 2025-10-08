<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateCollection;

trait UpdateCollectionTrait
{
    /**
     * @param UpdateCollectionRequest $args
     * @return UpdateCollectionResponse
     */
    public function updateCollection(UpdateCollectionRequest $args)
    {
        $result = parent::updateCollection($args->toArray());
        return new UpdateCollectionResponse($result->toArray());
    }
}

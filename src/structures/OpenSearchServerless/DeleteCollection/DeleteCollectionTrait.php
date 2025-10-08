<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteCollection;

trait DeleteCollectionTrait
{
    /**
     * @param DeleteCollectionRequest $args
     * @return DeleteCollectionResponse
     */
    public function deleteCollection(DeleteCollectionRequest $args)
    {
        $result = parent::deleteCollection($args->toArray());
        return new DeleteCollectionResponse($result->toArray());
    }
}

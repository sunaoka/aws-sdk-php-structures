<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollection;

trait CreateCollectionTrait
{
    /**
     * @param CreateCollectionRequest $args
     * @return CreateCollectionResponse
     */
    public function createCollection(CreateCollectionRequest $args)
    {
        $result = parent::createCollection($args->toArray());
        return new CreateCollectionResponse($result->toArray());
    }
}

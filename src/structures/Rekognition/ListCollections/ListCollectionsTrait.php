<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListCollections;

trait ListCollectionsTrait
{
    /**
     * @param ListCollectionsRequest $args
     * @return ListCollectionsResponse
     */
    public function listCollections(ListCollectionsRequest $args)
    {
        $result = parent::listCollections($args->toArray());
        return new ListCollectionsResponse($result->toArray());
    }
}

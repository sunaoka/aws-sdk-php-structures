<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrCollections;

trait ListCidrCollectionsTrait
{
    /**
     * @param ListCidrCollectionsRequest $args
     * @return ListCidrCollectionsResponse
     */
    public function listCidrCollections(ListCidrCollectionsRequest $args)
    {
        $result = parent::listCidrCollections($args->toArray());
        return new ListCidrCollectionsResponse($result->toArray());
    }
}

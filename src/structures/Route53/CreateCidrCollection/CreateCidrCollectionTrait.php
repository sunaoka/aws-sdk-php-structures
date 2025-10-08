<?php

namespace Sunaoka\Aws\Structures\Route53\CreateCidrCollection;

trait CreateCidrCollectionTrait
{
    /**
     * @param CreateCidrCollectionRequest $args
     * @return CreateCidrCollectionResponse
     */
    public function createCidrCollection(CreateCidrCollectionRequest $args)
    {
        $result = parent::createCidrCollection($args->toArray());
        return new CreateCidrCollectionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteCidrCollection;

trait DeleteCidrCollectionTrait
{
    /**
     * @param DeleteCidrCollectionRequest $args
     * @return DeleteCidrCollectionResponse
     */
    public function deleteCidrCollection(DeleteCidrCollectionRequest $args)
    {
        $result = parent::deleteCidrCollection($args->toArray());
        return new DeleteCidrCollectionResponse($result->toArray());
    }
}

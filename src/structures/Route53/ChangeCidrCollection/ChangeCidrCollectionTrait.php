<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeCidrCollection;

trait ChangeCidrCollectionTrait
{
    /**
     * @param ChangeCidrCollectionRequest $args
     * @return ChangeCidrCollectionResponse
     */
    public function changeCidrCollection(ChangeCidrCollectionRequest $args)
    {
        $result = parent::changeCidrCollection($args->toArray());
        return new ChangeCidrCollectionResponse($result->toArray());
    }
}

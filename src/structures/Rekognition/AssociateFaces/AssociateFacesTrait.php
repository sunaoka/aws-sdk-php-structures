<?php

namespace Sunaoka\Aws\Structures\Rekognition\AssociateFaces;

trait AssociateFacesTrait
{
    /**
     * @param AssociateFacesRequest $args
     * @return AssociateFacesResponse
     */
    public function associateFaces(AssociateFacesRequest $args)
    {
        $result = parent::associateFaces($args->toArray());
        return new AssociateFacesResponse($result->toArray());
    }
}

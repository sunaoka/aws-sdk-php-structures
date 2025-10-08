<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutProfileObject;

trait PutProfileObjectTrait
{
    /**
     * @param PutProfileObjectRequest $args
     * @return PutProfileObjectResponse
     */
    public function putProfileObject(PutProfileObjectRequest $args)
    {
        $result = parent::putProfileObject($args->toArray());
        return new PutProfileObjectResponse($result->toArray());
    }
}

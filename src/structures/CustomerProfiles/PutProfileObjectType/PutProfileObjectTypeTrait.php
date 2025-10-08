<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutProfileObjectType;

trait PutProfileObjectTypeTrait
{
    /**
     * @param PutProfileObjectTypeRequest $args
     * @return PutProfileObjectTypeResponse
     */
    public function putProfileObjectType(PutProfileObjectTypeRequest $args)
    {
        $result = parent::putProfileObjectType($args->toArray());
        return new PutProfileObjectTypeResponse($result->toArray());
    }
}

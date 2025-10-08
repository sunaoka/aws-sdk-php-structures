<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectType;

trait GetProfileObjectTypeTrait
{
    /**
     * @param GetProfileObjectTypeRequest $args
     * @return GetProfileObjectTypeResponse
     */
    public function getProfileObjectType(GetProfileObjectTypeRequest $args)
    {
        $result = parent::getProfileObjectType($args->toArray());
        return new GetProfileObjectTypeResponse($result->toArray());
    }
}

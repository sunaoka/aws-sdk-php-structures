<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DetectProfileObjectType;

trait DetectProfileObjectTypeTrait
{
    /**
     * @param DetectProfileObjectTypeRequest $args
     * @return DetectProfileObjectTypeResponse
     */
    public function detectProfileObjectType(DetectProfileObjectTypeRequest $args)
    {
        $result = parent::detectProfileObjectType($args->toArray());
        return new DetectProfileObjectTypeResponse($result->toArray());
    }
}

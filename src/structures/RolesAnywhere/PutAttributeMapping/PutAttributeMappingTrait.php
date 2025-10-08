<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutAttributeMapping;

trait PutAttributeMappingTrait
{
    /**
     * @param PutAttributeMappingRequest $args
     * @return PutAttributeMappingResponse
     */
    public function putAttributeMapping(PutAttributeMappingRequest $args)
    {
        $result = parent::putAttributeMapping($args->toArray());
        return new PutAttributeMappingResponse($result->toArray());
    }
}

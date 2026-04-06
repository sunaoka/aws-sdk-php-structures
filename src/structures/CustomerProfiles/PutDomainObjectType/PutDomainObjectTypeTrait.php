<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutDomainObjectType;

trait PutDomainObjectTypeTrait
{
    /**
     * @param PutDomainObjectTypeRequest $args
     * @return PutDomainObjectTypeResponse
     */
    public function putDomainObjectType(PutDomainObjectTypeRequest $args)
    {
        $result = parent::putDomainObjectType($args->toArray());
        return new PutDomainObjectTypeResponse($result->toArray());
    }
}

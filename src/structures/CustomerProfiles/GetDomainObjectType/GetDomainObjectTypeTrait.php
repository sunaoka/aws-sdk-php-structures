<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomainObjectType;

trait GetDomainObjectTypeTrait
{
    /**
     * @param GetDomainObjectTypeRequest $args
     * @return GetDomainObjectTypeResponse
     */
    public function getDomainObjectType(GetDomainObjectTypeRequest $args)
    {
        $result = parent::getDomainObjectType($args->toArray());
        return new GetDomainObjectTypeResponse($result->toArray());
    }
}

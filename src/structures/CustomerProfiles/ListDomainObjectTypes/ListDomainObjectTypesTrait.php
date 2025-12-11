<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListDomainObjectTypes;

trait ListDomainObjectTypesTrait
{
    /**
     * @param ListDomainObjectTypesRequest $args
     * @return ListDomainObjectTypesResponse
     */
    public function listDomainObjectTypes(ListDomainObjectTypesRequest $args)
    {
        $result = parent::listDomainObjectTypes($args->toArray());
        return new ListDomainObjectTypesResponse($result->toArray());
    }
}

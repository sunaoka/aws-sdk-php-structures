<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteDomainObjectType;

trait DeleteDomainObjectTypeTrait
{
    /**
     * @param DeleteDomainObjectTypeRequest $args
     * @return DeleteDomainObjectTypeResponse
     */
    public function deleteDomainObjectType(DeleteDomainObjectTypeRequest $args)
    {
        $result = parent::deleteDomainObjectType($args->toArray());
        return new DeleteDomainObjectTypeResponse($result->toArray());
    }
}

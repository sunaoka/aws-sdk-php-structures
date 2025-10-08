<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDomainUnit;

trait DeleteDomainUnitTrait
{
    /**
     * @param DeleteDomainUnitRequest $args
     * @return DeleteDomainUnitResponse
     */
    public function deleteDomainUnit(DeleteDomainUnitRequest $args)
    {
        $result = parent::deleteDomainUnit($args->toArray());
        return new DeleteDomainUnitResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit;

trait UpdateDomainUnitTrait
{
    /**
     * @param UpdateDomainUnitRequest $args
     * @return UpdateDomainUnitResponse
     */
    public function updateDomainUnit(UpdateDomainUnitRequest $args)
    {
        $result = parent::updateDomainUnit($args->toArray());
        return new UpdateDomainUnitResponse($result->toArray());
    }
}

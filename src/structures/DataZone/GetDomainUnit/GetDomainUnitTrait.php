<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomainUnit;

trait GetDomainUnitTrait
{
    /**
     * @param GetDomainUnitRequest $args
     * @return GetDomainUnitResponse
     */
    public function getDomainUnit(GetDomainUnitRequest $args)
    {
        $result = parent::getDomainUnit($args->toArray());
        return new GetDomainUnitResponse($result->toArray());
    }
}

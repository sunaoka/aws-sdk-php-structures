<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomainUnit;

trait CreateDomainUnitTrait
{
    /**
     * @param CreateDomainUnitRequest $args
     * @return CreateDomainUnitResponse
     */
    public function createDomainUnit(CreateDomainUnitRequest $args)
    {
        $result = parent::createDomainUnit($args->toArray());
        return new CreateDomainUnitResponse($result->toArray());
    }
}

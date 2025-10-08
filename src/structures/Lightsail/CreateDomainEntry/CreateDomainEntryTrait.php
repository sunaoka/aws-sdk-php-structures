<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDomainEntry;

trait CreateDomainEntryTrait
{
    /**
     * @param CreateDomainEntryRequest $args
     * @return CreateDomainEntryResponse
     */
    public function createDomainEntry(CreateDomainEntryRequest $args)
    {
        $result = parent::createDomainEntry($args->toArray());
        return new CreateDomainEntryResponse($result->toArray());
    }
}

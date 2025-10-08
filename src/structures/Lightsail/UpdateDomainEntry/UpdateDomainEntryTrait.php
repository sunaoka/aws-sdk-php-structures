<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDomainEntry;

trait UpdateDomainEntryTrait
{
    /**
     * @param UpdateDomainEntryRequest $args
     * @return UpdateDomainEntryResponse
     */
    public function updateDomainEntry(UpdateDomainEntryRequest $args)
    {
        $result = parent::updateDomainEntry($args->toArray());
        return new UpdateDomainEntryResponse($result->toArray());
    }
}

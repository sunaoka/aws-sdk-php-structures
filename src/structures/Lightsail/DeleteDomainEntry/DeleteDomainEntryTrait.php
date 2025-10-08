<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDomainEntry;

trait DeleteDomainEntryTrait
{
    /**
     * @param DeleteDomainEntryRequest $args
     * @return DeleteDomainEntryResponse
     */
    public function deleteDomainEntry(DeleteDomainEntryRequest $args)
    {
        $result = parent::deleteDomainEntry($args->toArray());
        return new DeleteDomainEntryResponse($result->toArray());
    }
}

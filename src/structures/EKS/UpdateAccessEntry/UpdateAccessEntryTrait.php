<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateAccessEntry;

trait UpdateAccessEntryTrait
{
    /**
     * @param UpdateAccessEntryRequest $args
     * @return UpdateAccessEntryResponse
     */
    public function updateAccessEntry(UpdateAccessEntryRequest $args)
    {
        $result = parent::updateAccessEntry($args->toArray());
        return new UpdateAccessEntryResponse($result->toArray());
    }
}

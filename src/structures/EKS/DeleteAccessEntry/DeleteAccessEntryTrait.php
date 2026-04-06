<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteAccessEntry;

trait DeleteAccessEntryTrait
{
    /**
     * @param DeleteAccessEntryRequest $args
     * @return DeleteAccessEntryResponse
     */
    public function deleteAccessEntry(DeleteAccessEntryRequest $args)
    {
        $result = parent::deleteAccessEntry($args->toArray());
        return new DeleteAccessEntryResponse($result->toArray());
    }
}

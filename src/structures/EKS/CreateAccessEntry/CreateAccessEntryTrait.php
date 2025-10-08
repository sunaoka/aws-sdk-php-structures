<?php

namespace Sunaoka\Aws\Structures\EKS\CreateAccessEntry;

trait CreateAccessEntryTrait
{
    /**
     * @param CreateAccessEntryRequest $args
     * @return CreateAccessEntryResponse
     */
    public function createAccessEntry(CreateAccessEntryRequest $args)
    {
        $result = parent::createAccessEntry($args->toArray());
        return new CreateAccessEntryResponse($result->toArray());
    }
}

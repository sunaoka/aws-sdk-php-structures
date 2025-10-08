<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateTagsForDomain;

trait UpdateTagsForDomainTrait
{
    /**
     * @param UpdateTagsForDomainRequest $args
     * @return UpdateTagsForDomainResponse
     */
    public function updateTagsForDomain(UpdateTagsForDomainRequest $args)
    {
        $result = parent::updateTagsForDomain($args->toArray());
        return new UpdateTagsForDomainResponse($result->toArray());
    }
}

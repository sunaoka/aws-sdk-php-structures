<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListTagsForDomain;

trait ListTagsForDomainTrait
{
    /**
     * @param ListTagsForDomainRequest $args
     * @return ListTagsForDomainResponse
     */
    public function listTagsForDomain(ListTagsForDomainRequest $args)
    {
        $result = parent::listTagsForDomain($args->toArray());
        return new ListTagsForDomainResponse($result->toArray());
    }
}

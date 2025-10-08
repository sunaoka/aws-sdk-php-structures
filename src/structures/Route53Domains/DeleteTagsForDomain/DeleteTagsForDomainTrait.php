<?php

namespace Sunaoka\Aws\Structures\Route53Domains\DeleteTagsForDomain;

trait DeleteTagsForDomainTrait
{
    /**
     * @param DeleteTagsForDomainRequest $args
     * @return DeleteTagsForDomainResponse
     */
    public function deleteTagsForDomain(DeleteTagsForDomainRequest $args)
    {
        $result = parent::deleteTagsForDomain($args->toArray());
        return new DeleteTagsForDomainResponse($result->toArray());
    }
}

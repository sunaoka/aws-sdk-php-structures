<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferences;

trait ListReferencesTrait
{
    /**
     * @param ListReferencesRequest $args
     * @return ListReferencesResponse
     */
    public function listReferences(ListReferencesRequest $args)
    {
        $result = parent::listReferences($args->toArray());
        return new ListReferencesResponse($result->toArray());
    }
}

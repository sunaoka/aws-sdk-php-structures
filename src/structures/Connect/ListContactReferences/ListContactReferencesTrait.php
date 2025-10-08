<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactReferences;

trait ListContactReferencesTrait
{
    /**
     * @param ListContactReferencesRequest $args
     * @return ListContactReferencesResponse
     */
    public function listContactReferences(ListContactReferencesRequest $args)
    {
        $result = parent::listContactReferences($args->toArray());
        return new ListContactReferencesResponse($result->toArray());
    }
}

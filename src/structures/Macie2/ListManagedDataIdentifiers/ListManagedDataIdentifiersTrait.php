<?php

namespace Sunaoka\Aws\Structures\Macie2\ListManagedDataIdentifiers;

trait ListManagedDataIdentifiersTrait
{
    /**
     * @param ListManagedDataIdentifiersRequest $args
     * @return ListManagedDataIdentifiersResponse
     */
    public function listManagedDataIdentifiers(ListManagedDataIdentifiersRequest $args)
    {
        $result = parent::listManagedDataIdentifiers($args->toArray());
        return new ListManagedDataIdentifiersResponse($result->toArray());
    }
}

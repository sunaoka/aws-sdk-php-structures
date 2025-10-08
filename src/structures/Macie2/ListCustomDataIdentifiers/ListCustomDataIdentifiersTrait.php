<?php

namespace Sunaoka\Aws\Structures\Macie2\ListCustomDataIdentifiers;

trait ListCustomDataIdentifiersTrait
{
    /**
     * @param ListCustomDataIdentifiersRequest $args
     * @return ListCustomDataIdentifiersResponse
     */
    public function listCustomDataIdentifiers(ListCustomDataIdentifiersRequest $args)
    {
        $result = parent::listCustomDataIdentifiers($args->toArray());
        return new ListCustomDataIdentifiersResponse($result->toArray());
    }
}

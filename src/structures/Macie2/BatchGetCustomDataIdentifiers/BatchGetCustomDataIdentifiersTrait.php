<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchGetCustomDataIdentifiers;

trait BatchGetCustomDataIdentifiersTrait
{
    /**
     * @param BatchGetCustomDataIdentifiersRequest $args
     * @return BatchGetCustomDataIdentifiersResponse
     */
    public function batchGetCustomDataIdentifiers(BatchGetCustomDataIdentifiersRequest $args)
    {
        $result = parent::batchGetCustomDataIdentifiers($args->toArray());
        return new BatchGetCustomDataIdentifiersResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetStandardsControlAssociations;

trait BatchGetStandardsControlAssociationsTrait
{
    /**
     * @param BatchGetStandardsControlAssociationsRequest $args
     * @return BatchGetStandardsControlAssociationsResponse
     */
    public function batchGetStandardsControlAssociations(BatchGetStandardsControlAssociationsRequest $args)
    {
        $result = parent::batchGetStandardsControlAssociations($args->toArray());
        return new BatchGetStandardsControlAssociationsResponse($result->toArray());
    }
}

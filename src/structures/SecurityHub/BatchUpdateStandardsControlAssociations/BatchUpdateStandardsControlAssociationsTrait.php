<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateStandardsControlAssociations;

trait BatchUpdateStandardsControlAssociationsTrait
{
    /**
     * @param BatchUpdateStandardsControlAssociationsRequest $args
     * @return BatchUpdateStandardsControlAssociationsResponse
     */
    public function batchUpdateStandardsControlAssociations(BatchUpdateStandardsControlAssociationsRequest $args)
    {
        $result = parent::batchUpdateStandardsControlAssociations($args->toArray());
        return new BatchUpdateStandardsControlAssociationsResponse($result->toArray());
    }
}

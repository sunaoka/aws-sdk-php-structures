<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListStandardsControlAssociations;

trait ListStandardsControlAssociationsTrait
{
    /**
     * @param ListStandardsControlAssociationsRequest $args
     * @return ListStandardsControlAssociationsResponse
     */
    public function listStandardsControlAssociations(ListStandardsControlAssociationsRequest $args)
    {
        $result = parent::listStandardsControlAssociations($args->toArray());
        return new ListStandardsControlAssociationsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListConfiguredTableAssociations;

trait ListConfiguredTableAssociationsTrait
{
    /**
     * @param ListConfiguredTableAssociationsRequest $args
     * @return ListConfiguredTableAssociationsResponse
     */
    public function listConfiguredTableAssociations(ListConfiguredTableAssociationsRequest $args)
    {
        $result = parent::listConfiguredTableAssociations($args->toArray());
        return new ListConfiguredTableAssociationsResponse($result->toArray());
    }
}

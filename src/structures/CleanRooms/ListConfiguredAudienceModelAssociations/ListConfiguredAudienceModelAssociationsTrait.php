<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListConfiguredAudienceModelAssociations;

trait ListConfiguredAudienceModelAssociationsTrait
{
    /**
     * @param ListConfiguredAudienceModelAssociationsRequest $args
     * @return ListConfiguredAudienceModelAssociationsResponse
     */
    public function listConfiguredAudienceModelAssociations(ListConfiguredAudienceModelAssociationsRequest $args)
    {
        $result = parent::listConfiguredAudienceModelAssociations($args->toArray());
        return new ListConfiguredAudienceModelAssociationsResponse($result->toArray());
    }
}

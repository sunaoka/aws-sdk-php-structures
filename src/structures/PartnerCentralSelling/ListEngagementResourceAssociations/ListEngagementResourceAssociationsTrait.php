<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementResourceAssociations;

trait ListEngagementResourceAssociationsTrait
{
    /**
     * @param ListEngagementResourceAssociationsRequest $args
     * @return ListEngagementResourceAssociationsResponse
     */
    public function listEngagementResourceAssociations(ListEngagementResourceAssociationsRequest $args)
    {
        $result = parent::listEngagementResourceAssociations($args->toArray());
        return new ListEngagementResourceAssociationsResponse($result->toArray());
    }
}

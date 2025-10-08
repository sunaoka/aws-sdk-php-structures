<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinkAssociations;

trait GetLinkAssociationsTrait
{
    /**
     * @param GetLinkAssociationsRequest $args
     * @return GetLinkAssociationsResponse
     */
    public function getLinkAssociations(GetLinkAssociationsRequest $args)
    {
        $result = parent::getLinkAssociations($args->toArray());
        return new GetLinkAssociationsResponse($result->toArray());
    }
}

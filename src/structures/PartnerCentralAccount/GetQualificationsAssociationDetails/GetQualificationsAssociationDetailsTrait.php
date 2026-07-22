<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetQualificationsAssociationDetails;

trait GetQualificationsAssociationDetailsTrait
{
    /**
     * @param GetQualificationsAssociationDetailsRequest $args
     * @return GetQualificationsAssociationDetailsResponse
     */
    public function getQualificationsAssociationDetails(GetQualificationsAssociationDetailsRequest $args)
    {
        $result = parent::getQualificationsAssociationDetails($args->toArray());
        return new GetQualificationsAssociationDetailsResponse($result->toArray());
    }
}

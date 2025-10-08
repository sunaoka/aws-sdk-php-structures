<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetTypedLinkFacetInformation;

trait GetTypedLinkFacetInformationTrait
{
    /**
     * @param GetTypedLinkFacetInformationRequest $args
     * @return GetTypedLinkFacetInformationResponse
     */
    public function getTypedLinkFacetInformation(GetTypedLinkFacetInformationRequest $args)
    {
        $result = parent::getTypedLinkFacetInformation($args->toArray());
        return new GetTypedLinkFacetInformationResponse($result->toArray());
    }
}

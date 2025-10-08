<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetLinkAttributes;

trait GetLinkAttributesTrait
{
    /**
     * @param GetLinkAttributesRequest $args
     * @return GetLinkAttributesResponse
     */
    public function getLinkAttributes(GetLinkAttributesRequest $args)
    {
        $result = parent::getLinkAttributes($args->toArray());
        return new GetLinkAttributesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateLinkAttributes;

trait UpdateLinkAttributesTrait
{
    /**
     * @param UpdateLinkAttributesRequest $args
     * @return UpdateLinkAttributesResponse
     */
    public function updateLinkAttributes(UpdateLinkAttributesRequest $args)
    {
        $result = parent::updateLinkAttributes($args->toArray());
        return new UpdateLinkAttributesResponse($result->toArray());
    }
}

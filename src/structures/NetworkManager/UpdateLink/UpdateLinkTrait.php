<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateLink;

trait UpdateLinkTrait
{
    /**
     * @param UpdateLinkRequest $args
     * @return UpdateLinkResponse
     */
    public function updateLink(UpdateLinkRequest $args)
    {
        $result = parent::updateLink($args->toArray());
        return new UpdateLinkResponse($result->toArray());
    }
}

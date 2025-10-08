<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AttachTypedLink;

trait AttachTypedLinkTrait
{
    /**
     * @param AttachTypedLinkRequest $args
     * @return AttachTypedLinkResponse
     */
    public function attachTypedLink(AttachTypedLinkRequest $args)
    {
        $result = parent::attachTypedLink($args->toArray());
        return new AttachTypedLinkResponse($result->toArray());
    }
}

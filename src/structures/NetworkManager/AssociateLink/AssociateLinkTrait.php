<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateLink;

trait AssociateLinkTrait
{
    /**
     * @param AssociateLinkRequest $args
     * @return AssociateLinkResponse
     */
    public function associateLink(AssociateLinkRequest $args)
    {
        $result = parent::associateLink($args->toArray());
        return new AssociateLinkResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateLink;

trait DisassociateLinkTrait
{
    /**
     * @param DisassociateLinkRequest $args
     * @return DisassociateLinkResponse
     */
    public function disassociateLink(DisassociateLinkRequest $args)
    {
        $result = parent::disassociateLink($args->toArray());
        return new DisassociateLinkResponse($result->toArray());
    }
}

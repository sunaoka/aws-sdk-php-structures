<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteInboundExternalLink;

trait DeleteInboundExternalLinkTrait
{
    /**
     * @param DeleteInboundExternalLinkRequest $args
     * @return DeleteInboundExternalLinkResponse
     */
    public function deleteInboundExternalLink(DeleteInboundExternalLinkRequest $args)
    {
        $result = parent::deleteInboundExternalLink($args->toArray());
        return new DeleteInboundExternalLinkResponse($result->toArray());
    }
}

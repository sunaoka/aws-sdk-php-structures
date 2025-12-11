<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteOutboundExternalLink;

trait DeleteOutboundExternalLinkTrait
{
    /**
     * @param DeleteOutboundExternalLinkRequest $args
     * @return DeleteOutboundExternalLinkResponse
     */
    public function deleteOutboundExternalLink(DeleteOutboundExternalLinkRequest $args)
    {
        $result = parent::deleteOutboundExternalLink($args->toArray());
        return new DeleteOutboundExternalLinkResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateInboundExternalLink;

trait CreateInboundExternalLinkTrait
{
    /**
     * @param CreateInboundExternalLinkRequest $args
     * @return CreateInboundExternalLinkResponse
     */
    public function createInboundExternalLink(CreateInboundExternalLinkRequest $args)
    {
        $result = parent::createInboundExternalLink($args->toArray());
        return new CreateInboundExternalLinkResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateOutboundExternalLink;

trait CreateOutboundExternalLinkTrait
{
    /**
     * @param CreateOutboundExternalLinkRequest $args
     * @return CreateOutboundExternalLinkResponse
     */
    public function createOutboundExternalLink(CreateOutboundExternalLinkRequest $args)
    {
        $result = parent::createOutboundExternalLink($args->toArray());
        return new CreateOutboundExternalLinkResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableVpcClassicLink;

trait DisableVpcClassicLinkTrait
{
    /**
     * @param DisableVpcClassicLinkRequest $args
     * @return DisableVpcClassicLinkResponse
     */
    public function disableVpcClassicLink(DisableVpcClassicLinkRequest $args)
    {
        $result = parent::disableVpcClassicLink($args->toArray());
        return new DisableVpcClassicLinkResponse($result->toArray());
    }
}

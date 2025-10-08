<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableVpcClassicLink;

trait EnableVpcClassicLinkTrait
{
    /**
     * @param EnableVpcClassicLinkRequest $args
     * @return EnableVpcClassicLinkResponse
     */
    public function enableVpcClassicLink(EnableVpcClassicLinkRequest $args)
    {
        $result = parent::enableVpcClassicLink($args->toArray());
        return new EnableVpcClassicLinkResponse($result->toArray());
    }
}

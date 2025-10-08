<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableVpcClassicLinkDnsSupport;

trait EnableVpcClassicLinkDnsSupportTrait
{
    /**
     * @param EnableVpcClassicLinkDnsSupportRequest $args
     * @return EnableVpcClassicLinkDnsSupportResponse
     */
    public function enableVpcClassicLinkDnsSupport(EnableVpcClassicLinkDnsSupportRequest $args)
    {
        $result = parent::enableVpcClassicLinkDnsSupport($args->toArray());
        return new EnableVpcClassicLinkDnsSupportResponse($result->toArray());
    }
}

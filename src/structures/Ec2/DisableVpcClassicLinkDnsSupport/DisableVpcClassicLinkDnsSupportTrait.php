<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableVpcClassicLinkDnsSupport;

trait DisableVpcClassicLinkDnsSupportTrait
{
    /**
     * @param DisableVpcClassicLinkDnsSupportRequest $args
     * @return DisableVpcClassicLinkDnsSupportResponse
     */
    public function disableVpcClassicLinkDnsSupport(DisableVpcClassicLinkDnsSupportRequest $args)
    {
        $result = parent::disableVpcClassicLinkDnsSupport($args->toArray());
        return new DisableVpcClassicLinkDnsSupportResponse($result->toArray());
    }
}

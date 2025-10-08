<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyPublicIpDnsNameOptions;

trait ModifyPublicIpDnsNameOptionsTrait
{
    /**
     * @param ModifyPublicIpDnsNameOptionsRequest $args
     * @return ModifyPublicIpDnsNameOptionsResponse
     */
    public function modifyPublicIpDnsNameOptions(ModifyPublicIpDnsNameOptionsRequest $args)
    {
        $result = parent::modifyPublicIpDnsNameOptions($args->toArray());
        return new ModifyPublicIpDnsNameOptionsResponse($result->toArray());
    }
}

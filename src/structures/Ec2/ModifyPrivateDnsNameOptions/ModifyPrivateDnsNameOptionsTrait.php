<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyPrivateDnsNameOptions;

trait ModifyPrivateDnsNameOptionsTrait
{
    /**
     * @param ModifyPrivateDnsNameOptionsRequest $args
     * @return ModifyPrivateDnsNameOptionsResponse
     */
    public function modifyPrivateDnsNameOptions(ModifyPrivateDnsNameOptionsRequest $args)
    {
        $result = parent::modifyPrivateDnsNameOptions($args->toArray());
        return new ModifyPrivateDnsNameOptionsResponse($result->toArray());
    }
}

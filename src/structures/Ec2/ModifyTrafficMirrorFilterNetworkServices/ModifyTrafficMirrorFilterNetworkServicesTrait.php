<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorFilterNetworkServices;

trait ModifyTrafficMirrorFilterNetworkServicesTrait
{
    /**
     * @param ModifyTrafficMirrorFilterNetworkServicesRequest $args
     * @return ModifyTrafficMirrorFilterNetworkServicesResponse
     */
    public function modifyTrafficMirrorFilterNetworkServices(ModifyTrafficMirrorFilterNetworkServicesRequest $args)
    {
        $result = parent::modifyTrafficMirrorFilterNetworkServices($args->toArray());
        return new ModifyTrafficMirrorFilterNetworkServicesResponse($result->toArray());
    }
}

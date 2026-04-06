<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ConfigureAccessPoint;

trait ConfigureAccessPointTrait
{
    /**
     * @param ConfigureAccessPointRequest $args
     * @return ConfigureAccessPointResponse
     */
    public function configureAccessPoint(ConfigureAccessPointRequest $args)
    {
        $result = parent::configureAccessPoint($args->toArray());
        return new ConfigureAccessPointResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterElasticIp;

trait DeregisterElasticIpTrait
{
    /**
     * @param DeregisterElasticIpRequest $args
     * @return void
     */
    public function deregisterElasticIp(DeregisterElasticIpRequest $args)
    {
        parent::deregisterElasticIp($args->toArray());
    }
}

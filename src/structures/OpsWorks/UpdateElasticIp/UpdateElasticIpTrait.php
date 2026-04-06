<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateElasticIp;

trait UpdateElasticIpTrait
{
    /**
     * @param UpdateElasticIpRequest $args
     * @return void
     */
    public function updateElasticIp(UpdateElasticIpRequest $args)
    {
        parent::updateElasticIp($args->toArray());
    }
}

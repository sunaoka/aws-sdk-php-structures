<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterElasticIp;

trait RegisterElasticIpTrait
{
    /**
     * @param RegisterElasticIpRequest $args
     * @return RegisterElasticIpResponse
     */
    public function registerElasticIp(RegisterElasticIpRequest $args)
    {
        $result = parent::registerElasticIp($args->toArray());
        return new RegisterElasticIpResponse($result->toArray());
    }
}

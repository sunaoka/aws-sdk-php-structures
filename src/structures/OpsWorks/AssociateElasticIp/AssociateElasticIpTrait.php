<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AssociateElasticIp;

trait AssociateElasticIpTrait
{
    /**
     * @param AssociateElasticIpRequest $args
     * @return void
     */
    public function associateElasticIp(AssociateElasticIpRequest $args)
    {
        parent::associateElasticIp($args->toArray());
    }
}

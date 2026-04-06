<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DisassociateElasticIp;

trait DisassociateElasticIpTrait
{
    /**
     * @param DisassociateElasticIpRequest $args
     * @return void
     */
    public function disassociateElasticIp(DisassociateElasticIpRequest $args)
    {
        parent::disassociateElasticIp($args->toArray());
    }
}

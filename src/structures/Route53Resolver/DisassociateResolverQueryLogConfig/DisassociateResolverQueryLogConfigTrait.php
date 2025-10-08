<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateResolverQueryLogConfig;

trait DisassociateResolverQueryLogConfigTrait
{
    /**
     * @param DisassociateResolverQueryLogConfigRequest $args
     * @return DisassociateResolverQueryLogConfigResponse
     */
    public function disassociateResolverQueryLogConfig(DisassociateResolverQueryLogConfigRequest $args)
    {
        $result = parent::disassociateResolverQueryLogConfig($args->toArray());
        return new DisassociateResolverQueryLogConfigResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateRouteServer;

trait DisassociateRouteServerTrait
{
    /**
     * @param DisassociateRouteServerRequest $args
     * @return DisassociateRouteServerResponse
     */
    public function disassociateRouteServer(DisassociateRouteServerRequest $args)
    {
        $result = parent::disassociateRouteServer($args->toArray());
        return new DisassociateRouteServerResponse($result->toArray());
    }
}

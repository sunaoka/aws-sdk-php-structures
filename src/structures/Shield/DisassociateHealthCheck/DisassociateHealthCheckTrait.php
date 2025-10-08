<?php

namespace Sunaoka\Aws\Structures\Shield\DisassociateHealthCheck;

trait DisassociateHealthCheckTrait
{
    /**
     * @param DisassociateHealthCheckRequest $args
     * @return DisassociateHealthCheckResponse
     */
    public function disassociateHealthCheck(DisassociateHealthCheckRequest $args)
    {
        $result = parent::disassociateHealthCheck($args->toArray());
        return new DisassociateHealthCheckResponse($result->toArray());
    }
}

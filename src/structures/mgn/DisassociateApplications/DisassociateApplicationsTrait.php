<?php

namespace Sunaoka\Aws\Structures\mgn\DisassociateApplications;

trait DisassociateApplicationsTrait
{
    /**
     * @param DisassociateApplicationsRequest $args
     * @return DisassociateApplicationsResponse
     */
    public function disassociateApplications(DisassociateApplicationsRequest $args)
    {
        $result = parent::disassociateApplications($args->toArray());
        return new DisassociateApplicationsResponse($result->toArray());
    }
}

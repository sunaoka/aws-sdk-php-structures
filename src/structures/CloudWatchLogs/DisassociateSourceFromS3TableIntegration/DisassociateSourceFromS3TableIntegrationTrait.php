<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DisassociateSourceFromS3TableIntegration;

trait DisassociateSourceFromS3TableIntegrationTrait
{
    /**
     * @param DisassociateSourceFromS3TableIntegrationRequest $args
     * @return DisassociateSourceFromS3TableIntegrationResponse
     */
    public function disassociateSourceFromS3TableIntegration(DisassociateSourceFromS3TableIntegrationRequest $args)
    {
        $result = parent::disassociateSourceFromS3TableIntegration($args->toArray());
        return new DisassociateSourceFromS3TableIntegrationResponse($result->toArray());
    }
}

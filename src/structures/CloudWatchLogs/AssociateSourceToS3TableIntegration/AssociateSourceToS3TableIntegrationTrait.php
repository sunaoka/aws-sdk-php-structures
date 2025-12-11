<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\AssociateSourceToS3TableIntegration;

trait AssociateSourceToS3TableIntegrationTrait
{
    /**
     * @param AssociateSourceToS3TableIntegrationRequest $args
     * @return AssociateSourceToS3TableIntegrationResponse
     */
    public function associateSourceToS3TableIntegration(AssociateSourceToS3TableIntegrationRequest $args)
    {
        $result = parent::associateSourceToS3TableIntegration($args->toArray());
        return new AssociateSourceToS3TableIntegrationResponse($result->toArray());
    }
}

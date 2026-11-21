<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartTrustedAccessProgramOrganizationApplication;

trait StartTrustedAccessProgramOrganizationApplicationTrait
{
    /**
     * @param StartTrustedAccessProgramOrganizationApplicationRequest $args
     * @return StartTrustedAccessProgramOrganizationApplicationResponse
     */
    public function startTrustedAccessProgramOrganizationApplication(StartTrustedAccessProgramOrganizationApplicationRequest $args)
    {
        $result = parent::startTrustedAccessProgramOrganizationApplication($args->toArray());
        return new StartTrustedAccessProgramOrganizationApplicationResponse($result->toArray());
    }
}

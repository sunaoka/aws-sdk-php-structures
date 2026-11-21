<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartTrustedAccessProgramProjectApplication;

trait StartTrustedAccessProgramProjectApplicationTrait
{
    /**
     * @param StartTrustedAccessProgramProjectApplicationRequest $args
     * @return StartTrustedAccessProgramProjectApplicationResponse
     */
    public function startTrustedAccessProgramProjectApplication(StartTrustedAccessProgramProjectApplicationRequest $args)
    {
        $result = parent::startTrustedAccessProgramProjectApplication($args->toArray());
        return new StartTrustedAccessProgramProjectApplicationResponse($result->toArray());
    }
}

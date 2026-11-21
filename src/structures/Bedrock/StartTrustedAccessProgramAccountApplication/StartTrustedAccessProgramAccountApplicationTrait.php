<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartTrustedAccessProgramAccountApplication;

trait StartTrustedAccessProgramAccountApplicationTrait
{
    /**
     * @param StartTrustedAccessProgramAccountApplicationRequest $args
     * @return StartTrustedAccessProgramAccountApplicationResponse
     */
    public function startTrustedAccessProgramAccountApplication(StartTrustedAccessProgramAccountApplicationRequest $args)
    {
        $result = parent::startTrustedAccessProgramAccountApplication($args->toArray());
        return new StartTrustedAccessProgramAccountApplicationResponse($result->toArray());
    }
}

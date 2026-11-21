<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetTrustedAccessProgram;

trait GetTrustedAccessProgramTrait
{
    /**
     * @param GetTrustedAccessProgramRequest $args
     * @return GetTrustedAccessProgramResponse
     */
    public function getTrustedAccessProgram(GetTrustedAccessProgramRequest $args)
    {
        $result = parent::getTrustedAccessProgram($args->toArray());
        return new GetTrustedAccessProgramResponse($result->toArray());
    }
}

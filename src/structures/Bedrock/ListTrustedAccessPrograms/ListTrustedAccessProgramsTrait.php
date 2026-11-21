<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListTrustedAccessPrograms;

trait ListTrustedAccessProgramsTrait
{
    /**
     * @param ListTrustedAccessProgramsRequest $args
     * @return ListTrustedAccessProgramsResponse
     */
    public function listTrustedAccessPrograms(ListTrustedAccessProgramsRequest $args)
    {
        $result = parent::listTrustedAccessPrograms($args->toArray());
        return new ListTrustedAccessProgramsResponse($result->toArray());
    }
}

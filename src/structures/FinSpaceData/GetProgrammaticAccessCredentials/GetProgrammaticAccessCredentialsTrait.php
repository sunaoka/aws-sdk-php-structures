<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetProgrammaticAccessCredentials;

trait GetProgrammaticAccessCredentialsTrait
{
    /**
     * @param GetProgrammaticAccessCredentialsRequest $args
     * @return GetProgrammaticAccessCredentialsResponse
     */
    public function getProgrammaticAccessCredentials(GetProgrammaticAccessCredentialsRequest $args)
    {
        $result = parent::getProgrammaticAccessCredentials($args->toArray());
        return new GetProgrammaticAccessCredentialsResponse($result->toArray());
    }
}

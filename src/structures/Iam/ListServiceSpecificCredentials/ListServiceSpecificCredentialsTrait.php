<?php

namespace Sunaoka\Aws\Structures\Iam\ListServiceSpecificCredentials;

trait ListServiceSpecificCredentialsTrait
{
    /**
     * @param ListServiceSpecificCredentialsRequest $args
     * @return ListServiceSpecificCredentialsResponse
     */
    public function listServiceSpecificCredentials(ListServiceSpecificCredentialsRequest $args)
    {
        $result = parent::listServiceSpecificCredentials($args->toArray());
        return new ListServiceSpecificCredentialsResponse($result->toArray());
    }
}

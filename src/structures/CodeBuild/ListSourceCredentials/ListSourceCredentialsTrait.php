<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSourceCredentials;

trait ListSourceCredentialsTrait
{
    /**
     * @param ListSourceCredentialsRequest $args
     * @return ListSourceCredentialsResponse
     */
    public function listSourceCredentials(ListSourceCredentialsRequest $args)
    {
        $result = parent::listSourceCredentials($args->toArray());
        return new ListSourceCredentialsResponse($result->toArray());
    }
}

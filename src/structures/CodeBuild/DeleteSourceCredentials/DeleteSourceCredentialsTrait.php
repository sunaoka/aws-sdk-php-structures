<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteSourceCredentials;

trait DeleteSourceCredentialsTrait
{
    /**
     * @param DeleteSourceCredentialsRequest $args
     * @return DeleteSourceCredentialsResponse
     */
    public function deleteSourceCredentials(DeleteSourceCredentialsRequest $args)
    {
        $result = parent::deleteSourceCredentials($args->toArray());
        return new DeleteSourceCredentialsResponse($result->toArray());
    }
}

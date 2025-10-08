<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ImportSourceCredentials;

trait ImportSourceCredentialsTrait
{
    /**
     * @param ImportSourceCredentialsRequest $args
     * @return ImportSourceCredentialsResponse
     */
    public function importSourceCredentials(ImportSourceCredentialsRequest $args)
    {
        $result = parent::importSourceCredentials($args->toArray());
        return new ImportSourceCredentialsResponse($result->toArray());
    }
}

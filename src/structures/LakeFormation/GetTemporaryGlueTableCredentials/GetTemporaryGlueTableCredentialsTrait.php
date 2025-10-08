<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGlueTableCredentials;

trait GetTemporaryGlueTableCredentialsTrait
{
    /**
     * @param GetTemporaryGlueTableCredentialsRequest $args
     * @return GetTemporaryGlueTableCredentialsResponse
     */
    public function getTemporaryGlueTableCredentials(GetTemporaryGlueTableCredentialsRequest $args)
    {
        $result = parent::getTemporaryGlueTableCredentials($args->toArray());
        return new GetTemporaryGlueTableCredentialsResponse($result->toArray());
    }
}

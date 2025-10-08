<?php

namespace Sunaoka\Aws\Structures\GameLift\RequestUploadCredentials;

trait RequestUploadCredentialsTrait
{
    /**
     * @param RequestUploadCredentialsRequest $args
     * @return RequestUploadCredentialsResponse
     */
    public function requestUploadCredentials(RequestUploadCredentialsRequest $args)
    {
        $result = parent::requestUploadCredentials($args->toArray());
        return new RequestUploadCredentialsResponse($result->toArray());
    }
}

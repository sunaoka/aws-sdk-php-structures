<?php

namespace Sunaoka\Aws\Structures\MediaPackage\RotateIngestEndpointCredentials;

trait RotateIngestEndpointCredentialsTrait
{
    /**
     * @param RotateIngestEndpointCredentialsRequest $args
     * @return RotateIngestEndpointCredentialsResponse
     */
    public function rotateIngestEndpointCredentials(RotateIngestEndpointCredentialsRequest $args)
    {
        $result = parent::rotateIngestEndpointCredentials($args->toArray());
        return new RotateIngestEndpointCredentialsResponse($result->toArray());
    }
}

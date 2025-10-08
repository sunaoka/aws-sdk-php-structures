<?php

namespace Sunaoka\Aws\Structures\MediaPackage\RotateChannelCredentials;

trait RotateChannelCredentialsTrait
{
    /**
     * @param RotateChannelCredentialsRequest $args
     * @return RotateChannelCredentialsResponse
     */
    public function rotateChannelCredentials(RotateChannelCredentialsRequest $args)
    {
        $result = parent::rotateChannelCredentials($args->toArray());
        return new RotateChannelCredentialsResponse($result->toArray());
    }
}

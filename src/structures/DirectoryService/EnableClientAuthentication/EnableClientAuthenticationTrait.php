<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableClientAuthentication;

trait EnableClientAuthenticationTrait
{
    /**
     * @param EnableClientAuthenticationRequest $args
     * @return EnableClientAuthenticationResponse
     */
    public function enableClientAuthentication(EnableClientAuthenticationRequest $args)
    {
        $result = parent::enableClientAuthentication($args->toArray());
        return new EnableClientAuthenticationResponse($result->toArray());
    }
}

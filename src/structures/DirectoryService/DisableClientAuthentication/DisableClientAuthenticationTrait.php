<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableClientAuthentication;

trait DisableClientAuthenticationTrait
{
    /**
     * @param DisableClientAuthenticationRequest $args
     * @return DisableClientAuthenticationResponse
     */
    public function disableClientAuthentication(DisableClientAuthenticationRequest $args)
    {
        $result = parent::disableClientAuthentication($args->toArray());
        return new DisableClientAuthenticationResponse($result->toArray());
    }
}

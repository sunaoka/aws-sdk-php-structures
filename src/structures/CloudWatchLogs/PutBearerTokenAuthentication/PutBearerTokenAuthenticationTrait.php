<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutBearerTokenAuthentication;

trait PutBearerTokenAuthenticationTrait
{
    /**
     * @param PutBearerTokenAuthenticationRequest $args
     * @return void
     */
    public function putBearerTokenAuthentication(PutBearerTokenAuthenticationRequest $args)
    {
        parent::putBearerTokenAuthentication($args->toArray());
    }
}

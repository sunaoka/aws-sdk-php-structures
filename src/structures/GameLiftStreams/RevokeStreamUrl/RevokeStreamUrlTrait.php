<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\RevokeStreamUrl;

trait RevokeStreamUrlTrait
{
    /**
     * @param RevokeStreamUrlRequest $args
     * @return void
     */
    public function revokeStreamUrl(RevokeStreamUrlRequest $args)
    {
        parent::revokeStreamUrl($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\StartScreenSharing;

trait StartScreenSharingTrait
{
    /**
     * @param StartScreenSharingRequest $args
     * @return StartScreenSharingResponse
     */
    public function startScreenSharing(StartScreenSharingRequest $args)
    {
        $result = parent::startScreenSharing($args->toArray());
        return new StartScreenSharingResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SnowBall\GetSoftwareUpdates;

trait GetSoftwareUpdatesTrait
{
    /**
     * @param GetSoftwareUpdatesRequest $args
     * @return GetSoftwareUpdatesResponse
     */
    public function getSoftwareUpdates(GetSoftwareUpdatesRequest $args)
    {
        $result = parent::getSoftwareUpdates($args->toArray());
        return new GetSoftwareUpdatesResponse($result->toArray());
    }
}

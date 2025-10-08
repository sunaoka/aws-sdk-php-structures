<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartServiceSoftwareUpdate;

trait StartServiceSoftwareUpdateTrait
{
    /**
     * @param StartServiceSoftwareUpdateRequest $args
     * @return StartServiceSoftwareUpdateResponse
     */
    public function startServiceSoftwareUpdate(StartServiceSoftwareUpdateRequest $args)
    {
        $result = parent::startServiceSoftwareUpdate($args->toArray());
        return new StartServiceSoftwareUpdateResponse($result->toArray());
    }
}

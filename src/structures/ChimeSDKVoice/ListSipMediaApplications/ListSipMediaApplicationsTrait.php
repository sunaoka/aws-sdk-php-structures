<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListSipMediaApplications;

trait ListSipMediaApplicationsTrait
{
    /**
     * @param ListSipMediaApplicationsRequest $args
     * @return ListSipMediaApplicationsResponse
     */
    public function listSipMediaApplications(ListSipMediaApplicationsRequest $args)
    {
        $result = parent::listSipMediaApplications($args->toArray());
        return new ListSipMediaApplicationsResponse($result->toArray());
    }
}

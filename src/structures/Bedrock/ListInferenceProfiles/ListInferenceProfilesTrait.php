<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListInferenceProfiles;

trait ListInferenceProfilesTrait
{
    /**
     * @param ListInferenceProfilesRequest $args
     * @return ListInferenceProfilesResponse
     */
    public function listInferenceProfiles(ListInferenceProfilesRequest $args)
    {
        $result = parent::listInferenceProfiles($args->toArray());
        return new ListInferenceProfilesResponse($result->toArray());
    }
}

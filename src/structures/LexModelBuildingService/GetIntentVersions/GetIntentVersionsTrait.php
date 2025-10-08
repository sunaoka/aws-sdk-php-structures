<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntentVersions;

trait GetIntentVersionsTrait
{
    /**
     * @param GetIntentVersionsRequest $args
     * @return GetIntentVersionsResponse
     */
    public function getIntentVersions(GetIntentVersionsRequest $args)
    {
        $result = parent::getIntentVersions($args->toArray());
        return new GetIntentVersionsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntents;

trait GetIntentsTrait
{
    /**
     * @param GetIntentsRequest $args
     * @return GetIntentsResponse
     */
    public function getIntents(GetIntentsRequest $args)
    {
        $result = parent::getIntents($args->toArray());
        return new GetIntentsResponse($result->toArray());
    }
}

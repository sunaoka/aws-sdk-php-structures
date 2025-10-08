<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinIntents;

trait GetBuiltinIntentsTrait
{
    /**
     * @param GetBuiltinIntentsRequest $args
     * @return GetBuiltinIntentsResponse
     */
    public function getBuiltinIntents(GetBuiltinIntentsRequest $args)
    {
        $result = parent::getBuiltinIntents($args->toArray());
        return new GetBuiltinIntentsResponse($result->toArray());
    }
}

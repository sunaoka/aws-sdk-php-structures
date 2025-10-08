<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent;

trait GetIntentTrait
{
    /**
     * @param GetIntentRequest $args
     * @return GetIntentResponse
     */
    public function getIntent(GetIntentRequest $args)
    {
        $result = parent::getIntent($args->toArray());
        return new GetIntentResponse($result->toArray());
    }
}

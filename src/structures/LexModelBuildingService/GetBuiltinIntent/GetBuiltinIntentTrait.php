<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinIntent;

trait GetBuiltinIntentTrait
{
    /**
     * @param GetBuiltinIntentRequest $args
     * @return GetBuiltinIntentResponse
     */
    public function getBuiltinIntent(GetBuiltinIntentRequest $args)
    {
        $result = parent::getBuiltinIntent($args->toArray());
        return new GetBuiltinIntentResponse($result->toArray());
    }
}

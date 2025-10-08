<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent;

trait PutIntentTrait
{
    /**
     * @param PutIntentRequest $args
     * @return PutIntentResponse
     */
    public function putIntent(PutIntentRequest $args)
    {
        $result = parent::putIntent($args->toArray());
        return new PutIntentResponse($result->toArray());
    }
}

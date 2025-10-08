<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent;

trait CreateIntentTrait
{
    /**
     * @param CreateIntentRequest $args
     * @return CreateIntentResponse
     */
    public function createIntent(CreateIntentRequest $args)
    {
        $result = parent::createIntent($args->toArray());
        return new CreateIntentResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteIntent;

trait DeleteIntentTrait
{
    /**
     * @param DeleteIntentRequest $args
     * @return void
     */
    public function deleteIntent(DeleteIntentRequest $args)
    {
        parent::deleteIntent($args->toArray());
    }
}

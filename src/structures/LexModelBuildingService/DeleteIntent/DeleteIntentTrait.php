<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteIntent;

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

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteSlot;

trait DeleteSlotTrait
{
    /**
     * @param DeleteSlotRequest $args
     * @return void
     */
    public function deleteSlot(DeleteSlotRequest $args)
    {
        parent::deleteSlot($args->toArray());
    }
}

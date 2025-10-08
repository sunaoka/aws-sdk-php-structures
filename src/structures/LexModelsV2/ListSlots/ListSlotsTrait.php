<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots;

trait ListSlotsTrait
{
    /**
     * @param ListSlotsRequest $args
     * @return ListSlotsResponse
     */
    public function listSlots(ListSlotsRequest $args)
    {
        $result = parent::listSlots($args->toArray());
        return new ListSlotsResponse($result->toArray());
    }
}

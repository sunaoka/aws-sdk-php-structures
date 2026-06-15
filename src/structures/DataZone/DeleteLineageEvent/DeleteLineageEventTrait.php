<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteLineageEvent;

trait DeleteLineageEventTrait
{
    /**
     * @param DeleteLineageEventRequest $args
     * @return DeleteLineageEventResponse
     */
    public function deleteLineageEvent(DeleteLineageEventRequest $args)
    {
        $result = parent::deleteLineageEvent($args->toArray());
        return new DeleteLineageEventResponse($result->toArray());
    }
}

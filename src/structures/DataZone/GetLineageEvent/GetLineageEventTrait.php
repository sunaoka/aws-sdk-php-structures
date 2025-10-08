<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageEvent;

trait GetLineageEventTrait
{
    /**
     * @param GetLineageEventRequest $args
     * @return GetLineageEventResponse
     */
    public function getLineageEvent(GetLineageEventRequest $args)
    {
        $result = parent::getLineageEvent($args->toArray());
        return new GetLineageEventResponse($result->toArray());
    }
}

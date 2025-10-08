<?php

namespace Sunaoka\Aws\Structures\DataZone\PostLineageEvent;

trait PostLineageEventTrait
{
    /**
     * @param PostLineageEventRequest $args
     * @return PostLineageEventResponse
     */
    public function postLineageEvent(PostLineageEventRequest $args)
    {
        $result = parent::postLineageEvent($args->toArray());
        return new PostLineageEventResponse($result->toArray());
    }
}

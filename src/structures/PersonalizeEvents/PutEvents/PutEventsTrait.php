<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutEvents;

trait PutEventsTrait
{
    /**
     * @param PutEventsRequest $args
     * @return void
     */
    public function putEvents(PutEventsRequest $args)
    {
        parent::putEvents($args->toArray());
    }
}

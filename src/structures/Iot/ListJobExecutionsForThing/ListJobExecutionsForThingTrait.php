<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForThing;

trait ListJobExecutionsForThingTrait
{
    /**
     * @param ListJobExecutionsForThingRequest $args
     * @return ListJobExecutionsForThingResponse
     */
    public function listJobExecutionsForThing(ListJobExecutionsForThingRequest $args)
    {
        $result = parent::listJobExecutionsForThing($args->toArray());
        return new ListJobExecutionsForThingResponse($result->toArray());
    }
}

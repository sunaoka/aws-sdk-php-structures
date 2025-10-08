<?php

namespace Sunaoka\Aws\Structures\Iot\ListThings;

trait ListThingsTrait
{
    /**
     * @param ListThingsRequest $args
     * @return ListThingsResponse
     */
    public function listThings(ListThingsRequest $args)
    {
        $result = parent::listThings($args->toArray());
        return new ListThingsResponse($result->toArray());
    }
}

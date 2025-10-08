<?php

namespace Sunaoka\Aws\Structures\Iot\ListOTAUpdates;

trait ListOTAUpdatesTrait
{
    /**
     * @param ListOTAUpdatesRequest $args
     * @return ListOTAUpdatesResponse
     */
    public function listOTAUpdates(ListOTAUpdatesRequest $args)
    {
        $result = parent::listOTAUpdates($args->toArray());
        return new ListOTAUpdatesResponse($result->toArray());
    }
}

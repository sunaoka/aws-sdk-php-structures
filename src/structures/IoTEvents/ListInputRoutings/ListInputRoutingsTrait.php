<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings;

trait ListInputRoutingsTrait
{
    /**
     * @param ListInputRoutingsRequest $args
     * @return ListInputRoutingsResponse
     */
    public function listInputRoutings(ListInputRoutingsRequest $args)
    {
        $result = parent::listInputRoutings($args->toArray());
        return new ListInputRoutingsResponse($result->toArray());
    }
}

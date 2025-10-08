<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls;

trait ListEnabledControlsTrait
{
    /**
     * @param ListEnabledControlsRequest $args
     * @return ListEnabledControlsResponse
     */
    public function listEnabledControls(ListEnabledControlsRequest $args)
    {
        $result = parent::listEnabledControls($args->toArray());
        return new ListEnabledControlsResponse($result->toArray());
    }
}

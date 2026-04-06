<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControls;

trait ListControlsTrait
{
    /**
     * @param ListControlsRequest $args
     * @return ListControlsResponse
     */
    public function listControls(ListControlsRequest $args)
    {
        $result = parent::listControls($args->toArray());
        return new ListControlsResponse($result->toArray());
    }
}

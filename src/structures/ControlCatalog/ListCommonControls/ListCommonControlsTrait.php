<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListCommonControls;

trait ListCommonControlsTrait
{
    /**
     * @param ListCommonControlsRequest $args
     * @return ListCommonControlsResponse
     */
    public function listCommonControls(ListCommonControlsRequest $args)
    {
        $result = parent::listCommonControls($args->toArray());
        return new ListCommonControlsResponse($result->toArray());
    }
}

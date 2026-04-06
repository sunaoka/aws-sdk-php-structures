<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudioComponents;

trait ListStudioComponentsTrait
{
    /**
     * @param ListStudioComponentsRequest $args
     * @return ListStudioComponentsResponse
     */
    public function listStudioComponents(ListStudioComponentsRequest $args)
    {
        $result = parent::listStudioComponents($args->toArray());
        return new ListStudioComponentsResponse($result->toArray());
    }
}

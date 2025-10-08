<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListLayouts;

trait ListLayoutsTrait
{
    /**
     * @param ListLayoutsRequest $args
     * @return ListLayoutsResponse
     */
    public function listLayouts(ListLayoutsRequest $args)
    {
        $result = parent::listLayouts($args->toArray());
        return new ListLayoutsResponse($result->toArray());
    }
}

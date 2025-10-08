<?php

namespace Sunaoka\Aws\Structures\Swf\ListActivityTypes;

trait ListActivityTypesTrait
{
    /**
     * @param ListActivityTypesRequest $args
     * @return ListActivityTypesResponse
     */
    public function listActivityTypes(ListActivityTypesRequest $args)
    {
        $result = parent::listActivityTypes($args->toArray());
        return new ListActivityTypesResponse($result->toArray());
    }
}

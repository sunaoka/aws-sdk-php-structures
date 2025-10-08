<?php

namespace Sunaoka\Aws\Structures\FIS\ListTargetResourceTypes;

trait ListTargetResourceTypesTrait
{
    /**
     * @param ListTargetResourceTypesRequest $args
     * @return ListTargetResourceTypesResponse
     */
    public function listTargetResourceTypes(ListTargetResourceTypesRequest $args)
    {
        $result = parent::listTargetResourceTypes($args->toArray());
        return new ListTargetResourceTypesResponse($result->toArray());
    }
}

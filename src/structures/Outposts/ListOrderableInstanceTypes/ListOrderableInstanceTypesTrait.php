<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrderableInstanceTypes;

trait ListOrderableInstanceTypesTrait
{
    /**
     * @param ListOrderableInstanceTypesRequest $args
     * @return ListOrderableInstanceTypesResponse
     */
    public function listOrderableInstanceTypes(ListOrderableInstanceTypesRequest $args)
    {
        $result = parent::listOrderableInstanceTypes($args->toArray());
        return new ListOrderableInstanceTypesResponse($result->toArray());
    }
}

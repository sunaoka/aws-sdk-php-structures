<?php

namespace Sunaoka\Aws\Structures\Emr\ListSupportedInstanceTypes;

trait ListSupportedInstanceTypesTrait
{
    /**
     * @param ListSupportedInstanceTypesRequest $args
     * @return ListSupportedInstanceTypesResponse
     */
    public function listSupportedInstanceTypes(ListSupportedInstanceTypesRequest $args)
    {
        $result = parent::listSupportedInstanceTypes($args->toArray());
        return new ListSupportedInstanceTypesResponse($result->toArray());
    }
}

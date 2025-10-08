<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostInstanceTypes;

trait GetOutpostInstanceTypesTrait
{
    /**
     * @param GetOutpostInstanceTypesRequest $args
     * @return GetOutpostInstanceTypesResponse
     */
    public function getOutpostInstanceTypes(GetOutpostInstanceTypesRequest $args)
    {
        $result = parent::getOutpostInstanceTypes($args->toArray());
        return new GetOutpostInstanceTypesResponse($result->toArray());
    }
}

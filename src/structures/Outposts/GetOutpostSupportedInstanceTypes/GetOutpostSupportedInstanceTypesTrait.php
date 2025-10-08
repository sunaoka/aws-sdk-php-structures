<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostSupportedInstanceTypes;

trait GetOutpostSupportedInstanceTypesTrait
{
    /**
     * @param GetOutpostSupportedInstanceTypesRequest $args
     * @return GetOutpostSupportedInstanceTypesResponse
     */
    public function getOutpostSupportedInstanceTypes(GetOutpostSupportedInstanceTypesRequest $args)
    {
        $result = parent::getOutpostSupportedInstanceTypes($args->toArray());
        return new GetOutpostSupportedInstanceTypesResponse($result->toArray());
    }
}

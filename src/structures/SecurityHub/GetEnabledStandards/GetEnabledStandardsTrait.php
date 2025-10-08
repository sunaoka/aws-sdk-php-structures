<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetEnabledStandards;

trait GetEnabledStandardsTrait
{
    /**
     * @param GetEnabledStandardsRequest $args
     * @return GetEnabledStandardsResponse
     */
    public function getEnabledStandards(GetEnabledStandardsRequest $args)
    {
        $result = parent::getEnabledStandards($args->toArray());
        return new GetEnabledStandardsResponse($result->toArray());
    }
}

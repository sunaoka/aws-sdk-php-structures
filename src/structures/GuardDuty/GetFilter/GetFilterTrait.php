<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFilter;

trait GetFilterTrait
{
    /**
     * @param GetFilterRequest $args
     * @return GetFilterResponse
     */
    public function getFilter(GetFilterRequest $args)
    {
        $result = parent::getFilter($args->toArray());
        return new GetFilterResponse($result->toArray());
    }
}

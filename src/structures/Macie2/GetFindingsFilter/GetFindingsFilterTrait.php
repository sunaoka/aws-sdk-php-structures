<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingsFilter;

trait GetFindingsFilterTrait
{
    /**
     * @param GetFindingsFilterRequest $args
     * @return GetFindingsFilterResponse
     */
    public function getFindingsFilter(GetFindingsFilterRequest $args)
    {
        $result = parent::getFindingsFilter($args->toArray());
        return new GetFindingsFilterResponse($result->toArray());
    }
}

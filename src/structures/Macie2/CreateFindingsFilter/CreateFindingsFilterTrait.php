<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateFindingsFilter;

trait CreateFindingsFilterTrait
{
    /**
     * @param CreateFindingsFilterRequest $args
     * @return CreateFindingsFilterResponse
     */
    public function createFindingsFilter(CreateFindingsFilterRequest $args)
    {
        $result = parent::createFindingsFilter($args->toArray());
        return new CreateFindingsFilterResponse($result->toArray());
    }
}

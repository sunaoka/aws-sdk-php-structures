<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateFindingsFilter;

trait UpdateFindingsFilterTrait
{
    /**
     * @param UpdateFindingsFilterRequest $args
     * @return UpdateFindingsFilterResponse
     */
    public function updateFindingsFilter(UpdateFindingsFilterRequest $args)
    {
        $result = parent::updateFindingsFilter($args->toArray());
        return new UpdateFindingsFilterResponse($result->toArray());
    }
}

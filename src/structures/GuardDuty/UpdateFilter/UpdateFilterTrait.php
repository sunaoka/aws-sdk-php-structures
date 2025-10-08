<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateFilter;

trait UpdateFilterTrait
{
    /**
     * @param UpdateFilterRequest $args
     * @return UpdateFilterResponse
     */
    public function updateFilter(UpdateFilterRequest $args)
    {
        $result = parent::updateFilter($args->toArray());
        return new UpdateFilterResponse($result->toArray());
    }
}

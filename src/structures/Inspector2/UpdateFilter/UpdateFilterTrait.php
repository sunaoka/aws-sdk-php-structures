<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateFilter;

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

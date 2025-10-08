<?php

namespace Sunaoka\Aws\Structures\Inspector\ListExclusions;

trait ListExclusionsTrait
{
    /**
     * @param ListExclusionsRequest $args
     * @return ListExclusionsResponse
     */
    public function listExclusions(ListExclusionsRequest $args)
    {
        $result = parent::listExclusions($args->toArray());
        return new ListExclusionsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetChangeset;

trait GetChangesetTrait
{
    /**
     * @param GetChangesetRequest $args
     * @return GetChangesetResponse
     */
    public function getChangeset(GetChangesetRequest $args)
    {
        $result = parent::getChangeset($args->toArray());
        return new GetChangesetResponse($result->toArray());
    }
}

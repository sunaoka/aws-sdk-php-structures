<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdateChangeset;

trait UpdateChangesetTrait
{
    /**
     * @param UpdateChangesetRequest $args
     * @return UpdateChangesetResponse
     */
    public function updateChangeset(UpdateChangesetRequest $args)
    {
        $result = parent::updateChangeset($args->toArray());
        return new UpdateChangesetResponse($result->toArray());
    }
}

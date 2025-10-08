<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindings;

trait UpdateFindingsTrait
{
    /**
     * @param UpdateFindingsRequest $args
     * @return UpdateFindingsResponse
     */
    public function updateFindings(UpdateFindingsRequest $args)
    {
        $result = parent::updateFindings($args->toArray());
        return new UpdateFindingsResponse($result->toArray());
    }
}

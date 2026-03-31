<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateLookupTable;

trait UpdateLookupTableTrait
{
    /**
     * @param UpdateLookupTableRequest $args
     * @return UpdateLookupTableResponse
     */
    public function updateLookupTable(UpdateLookupTableRequest $args)
    {
        $result = parent::updateLookupTable($args->toArray());
        return new UpdateLookupTableResponse($result->toArray());
    }
}

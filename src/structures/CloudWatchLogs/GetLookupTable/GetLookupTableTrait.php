<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLookupTable;

trait GetLookupTableTrait
{
    /**
     * @param GetLookupTableRequest $args
     * @return GetLookupTableResponse
     */
    public function getLookupTable(GetLookupTableRequest $args)
    {
        $result = parent::getLookupTable($args->toArray());
        return new GetLookupTableResponse($result->toArray());
    }
}

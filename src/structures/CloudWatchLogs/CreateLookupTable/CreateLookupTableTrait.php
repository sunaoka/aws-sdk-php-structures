<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLookupTable;

trait CreateLookupTableTrait
{
    /**
     * @param CreateLookupTableRequest $args
     * @return CreateLookupTableResponse
     */
    public function createLookupTable(CreateLookupTableRequest $args)
    {
        $result = parent::createLookupTable($args->toArray());
        return new CreateLookupTableResponse($result->toArray());
    }
}

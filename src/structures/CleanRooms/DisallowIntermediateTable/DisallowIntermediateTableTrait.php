<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DisallowIntermediateTable;

trait DisallowIntermediateTableTrait
{
    /**
     * @param DisallowIntermediateTableRequest $args
     * @return DisallowIntermediateTableResponse
     */
    public function disallowIntermediateTable(DisallowIntermediateTableRequest $args)
    {
        $result = parent::disallowIntermediateTable($args->toArray());
        return new DisallowIntermediateTableResponse($result->toArray());
    }
}

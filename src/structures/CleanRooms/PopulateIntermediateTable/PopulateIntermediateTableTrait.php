<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PopulateIntermediateTable;

trait PopulateIntermediateTableTrait
{
    /**
     * @param PopulateIntermediateTableRequest $args
     * @return PopulateIntermediateTableResponse
     */
    public function populateIntermediateTable(PopulateIntermediateTableRequest $args)
    {
        $result = parent::populateIntermediateTable($args->toArray());
        return new PopulateIntermediateTableResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PopulateIdMappingTable;

trait PopulateIdMappingTableTrait
{
    /**
     * @param PopulateIdMappingTableRequest $args
     * @return PopulateIdMappingTableResponse
     */
    public function populateIdMappingTable(PopulateIdMappingTableRequest $args)
    {
        $result = parent::populateIdMappingTable($args->toArray());
        return new PopulateIdMappingTableResponse($result->toArray());
    }
}

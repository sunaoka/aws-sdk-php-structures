<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIdMappingTable;

trait CreateIdMappingTableTrait
{
    /**
     * @param CreateIdMappingTableRequest $args
     * @return CreateIdMappingTableResponse
     */
    public function createIdMappingTable(CreateIdMappingTableRequest $args)
    {
        $result = parent::createIdMappingTable($args->toArray());
        return new CreateIdMappingTableResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdMappingTable;

trait UpdateIdMappingTableTrait
{
    /**
     * @param UpdateIdMappingTableRequest $args
     * @return UpdateIdMappingTableResponse
     */
    public function updateIdMappingTable(UpdateIdMappingTableRequest $args)
    {
        $result = parent::updateIdMappingTable($args->toArray());
        return new UpdateIdMappingTableResponse($result->toArray());
    }
}

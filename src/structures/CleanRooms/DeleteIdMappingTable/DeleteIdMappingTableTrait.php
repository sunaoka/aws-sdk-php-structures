<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteIdMappingTable;

trait DeleteIdMappingTableTrait
{
    /**
     * @param DeleteIdMappingTableRequest $args
     * @return DeleteIdMappingTableResponse
     */
    public function deleteIdMappingTable(DeleteIdMappingTableRequest $args)
    {
        $result = parent::deleteIdMappingTable($args->toArray());
        return new DeleteIdMappingTableResponse($result->toArray());
    }
}

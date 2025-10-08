<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIdMappingTable;

trait GetIdMappingTableTrait
{
    /**
     * @param GetIdMappingTableRequest $args
     * @return GetIdMappingTableResponse
     */
    public function getIdMappingTable(GetIdMappingTableRequest $args)
    {
        $result = parent::getIdMappingTable($args->toArray());
        return new GetIdMappingTableResponse($result->toArray());
    }
}

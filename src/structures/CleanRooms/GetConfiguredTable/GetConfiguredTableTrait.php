<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable;

trait GetConfiguredTableTrait
{
    /**
     * @param GetConfiguredTableRequest $args
     * @return GetConfiguredTableResponse
     */
    public function getConfiguredTable(GetConfiguredTableRequest $args)
    {
        $result = parent::getConfiguredTable($args->toArray());
        return new GetConfiguredTableResponse($result->toArray());
    }
}

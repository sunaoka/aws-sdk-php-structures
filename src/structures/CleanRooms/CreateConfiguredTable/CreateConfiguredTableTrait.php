<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTable;

trait CreateConfiguredTableTrait
{
    /**
     * @param CreateConfiguredTableRequest $args
     * @return CreateConfiguredTableResponse
     */
    public function createConfiguredTable(CreateConfiguredTableRequest $args)
    {
        $result = parent::createConfiguredTable($args->toArray());
        return new CreateConfiguredTableResponse($result->toArray());
    }
}

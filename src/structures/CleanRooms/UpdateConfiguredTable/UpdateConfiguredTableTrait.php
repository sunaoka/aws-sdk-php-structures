<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable;

trait UpdateConfiguredTableTrait
{
    /**
     * @param UpdateConfiguredTableRequest $args
     * @return UpdateConfiguredTableResponse
     */
    public function updateConfiguredTable(UpdateConfiguredTableRequest $args)
    {
        $result = parent::updateConfiguredTable($args->toArray());
        return new UpdateConfiguredTableResponse($result->toArray());
    }
}

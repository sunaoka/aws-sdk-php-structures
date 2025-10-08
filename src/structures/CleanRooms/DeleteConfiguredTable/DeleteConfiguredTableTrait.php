<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredTable;

trait DeleteConfiguredTableTrait
{
    /**
     * @param DeleteConfiguredTableRequest $args
     * @return DeleteConfiguredTableResponse
     */
    public function deleteConfiguredTable(DeleteConfiguredTableRequest $args)
    {
        $result = parent::deleteConfiguredTable($args->toArray());
        return new DeleteConfiguredTableResponse($result->toArray());
    }
}

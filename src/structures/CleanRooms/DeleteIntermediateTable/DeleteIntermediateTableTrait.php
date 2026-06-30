<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteIntermediateTable;

trait DeleteIntermediateTableTrait
{
    /**
     * @param DeleteIntermediateTableRequest $args
     * @return DeleteIntermediateTableResponse
     */
    public function deleteIntermediateTable(DeleteIntermediateTableRequest $args)
    {
        $result = parent::deleteIntermediateTable($args->toArray());
        return new DeleteIntermediateTableResponse($result->toArray());
    }
}

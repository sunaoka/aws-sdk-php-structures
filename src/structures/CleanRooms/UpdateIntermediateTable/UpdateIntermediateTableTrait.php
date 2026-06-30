<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTable;

trait UpdateIntermediateTableTrait
{
    /**
     * @param UpdateIntermediateTableRequest $args
     * @return UpdateIntermediateTableResponse
     */
    public function updateIntermediateTable(UpdateIntermediateTableRequest $args)
    {
        $result = parent::updateIntermediateTable($args->toArray());
        return new UpdateIntermediateTableResponse($result->toArray());
    }
}

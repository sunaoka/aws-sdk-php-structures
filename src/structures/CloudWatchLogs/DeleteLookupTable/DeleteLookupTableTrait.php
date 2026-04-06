<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteLookupTable;

trait DeleteLookupTableTrait
{
    /**
     * @param DeleteLookupTableRequest $args
     * @return void
     */
    public function deleteLookupTable(DeleteLookupTableRequest $args)
    {
        parent::deleteLookupTable($args->toArray());
    }
}

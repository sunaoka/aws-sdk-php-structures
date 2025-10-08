<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DeleteDatabase;

trait DeleteDatabaseTrait
{
    /**
     * @param DeleteDatabaseRequest $args
     * @return void
     */
    public function deleteDatabase(DeleteDatabaseRequest $args)
    {
        parent::deleteDatabase($args->toArray());
    }
}

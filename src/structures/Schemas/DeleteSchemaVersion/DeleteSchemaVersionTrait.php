<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteSchemaVersion;

trait DeleteSchemaVersionTrait
{
    /**
     * @param DeleteSchemaVersionRequest $args
     * @return void
     */
    public function deleteSchemaVersion(DeleteSchemaVersionRequest $args)
    {
        parent::deleteSchemaVersion($args->toArray());
    }
}

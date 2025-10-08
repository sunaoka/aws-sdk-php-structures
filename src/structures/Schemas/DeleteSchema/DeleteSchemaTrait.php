<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteSchema;

trait DeleteSchemaTrait
{
    /**
     * @param DeleteSchemaRequest $args
     * @return void
     */
    public function deleteSchema(DeleteSchemaRequest $args)
    {
        parent::deleteSchema($args->toArray());
    }
}

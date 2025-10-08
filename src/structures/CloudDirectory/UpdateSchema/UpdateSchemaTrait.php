<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateSchema;

trait UpdateSchemaTrait
{
    /**
     * @param UpdateSchemaRequest $args
     * @return UpdateSchemaResponse
     */
    public function updateSchema(UpdateSchemaRequest $args)
    {
        $result = parent::updateSchema($args->toArray());
        return new UpdateSchemaResponse($result->toArray());
    }
}

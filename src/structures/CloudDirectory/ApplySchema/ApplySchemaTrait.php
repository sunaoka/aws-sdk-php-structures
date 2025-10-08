<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ApplySchema;

trait ApplySchemaTrait
{
    /**
     * @param ApplySchemaRequest $args
     * @return ApplySchemaResponse
     */
    public function applySchema(ApplySchemaRequest $args)
    {
        $result = parent::applySchema($args->toArray());
        return new ApplySchemaResponse($result->toArray());
    }
}

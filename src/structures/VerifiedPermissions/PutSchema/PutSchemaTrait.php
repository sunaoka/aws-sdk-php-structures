<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\PutSchema;

trait PutSchemaTrait
{
    /**
     * @param PutSchemaRequest $args
     * @return PutSchemaResponse
     */
    public function putSchema(PutSchemaRequest $args)
    {
        $result = parent::putSchema($args->toArray());
        return new PutSchemaResponse($result->toArray());
    }
}

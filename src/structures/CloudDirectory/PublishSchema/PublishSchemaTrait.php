<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\PublishSchema;

trait PublishSchemaTrait
{
    /**
     * @param PublishSchemaRequest $args
     * @return PublishSchemaResponse
     */
    public function publishSchema(PublishSchemaRequest $args)
    {
        $result = parent::publishSchema($args->toArray());
        return new PublishSchemaResponse($result->toArray());
    }
}

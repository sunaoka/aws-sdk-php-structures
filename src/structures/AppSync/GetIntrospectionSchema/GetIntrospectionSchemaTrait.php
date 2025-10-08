<?php

namespace Sunaoka\Aws\Structures\AppSync\GetIntrospectionSchema;

trait GetIntrospectionSchemaTrait
{
    /**
     * @param GetIntrospectionSchemaRequest $args
     * @return GetIntrospectionSchemaResponse
     */
    public function getIntrospectionSchema(GetIntrospectionSchemaRequest $args)
    {
        $result = parent::getIntrospectionSchema($args->toArray());
        return new GetIntrospectionSchemaResponse($result->toArray());
    }
}

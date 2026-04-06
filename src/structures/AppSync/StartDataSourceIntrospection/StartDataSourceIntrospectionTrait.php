<?php

namespace Sunaoka\Aws\Structures\AppSync\StartDataSourceIntrospection;

trait StartDataSourceIntrospectionTrait
{
    /**
     * @param StartDataSourceIntrospectionRequest $args
     * @return StartDataSourceIntrospectionResponse
     */
    public function startDataSourceIntrospection(StartDataSourceIntrospectionRequest $args)
    {
        $result = parent::startDataSourceIntrospection($args->toArray());
        return new StartDataSourceIntrospectionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection;

trait GetDataSourceIntrospectionTrait
{
    /**
     * @param GetDataSourceIntrospectionRequest $args
     * @return GetDataSourceIntrospectionResponse
     */
    public function getDataSourceIntrospection(GetDataSourceIntrospectionRequest $args)
    {
        $result = parent::getDataSourceIntrospection($args->toArray());
        return new GetDataSourceIntrospectionResponse($result->toArray());
    }
}

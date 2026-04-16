<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderSchemas;

trait ListRecommenderSchemasTrait
{
    /**
     * @param ListRecommenderSchemasRequest $args
     * @return ListRecommenderSchemasResponse
     */
    public function listRecommenderSchemas(ListRecommenderSchemasRequest $args)
    {
        $result = parent::listRecommenderSchemas($args->toArray());
        return new ListRecommenderSchemasResponse($result->toArray());
    }
}

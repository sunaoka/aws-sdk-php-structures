<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommenderSchema;

trait GetRecommenderSchemaTrait
{
    /**
     * @param GetRecommenderSchemaRequest $args
     * @return GetRecommenderSchemaResponse
     */
    public function getRecommenderSchema(GetRecommenderSchemaRequest $args)
    {
        $result = parent::getRecommenderSchema($args->toArray());
        return new GetRecommenderSchemaResponse($result->toArray());
    }
}

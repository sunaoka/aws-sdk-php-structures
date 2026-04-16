<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommenderSchema;

trait CreateRecommenderSchemaTrait
{
    /**
     * @param CreateRecommenderSchemaRequest $args
     * @return CreateRecommenderSchemaResponse
     */
    public function createRecommenderSchema(CreateRecommenderSchemaRequest $args)
    {
        $result = parent::createRecommenderSchema($args->toArray());
        return new CreateRecommenderSchemaResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteRecommenderSchema;

trait DeleteRecommenderSchemaTrait
{
    /**
     * @param DeleteRecommenderSchemaRequest $args
     * @return DeleteRecommenderSchemaResponse
     */
    public function deleteRecommenderSchema(DeleteRecommenderSchemaRequest $args)
    {
        $result = parent::deleteRecommenderSchema($args->toArray());
        return new DeleteRecommenderSchemaResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommender;

trait CreateRecommenderTrait
{
    /**
     * @param CreateRecommenderRequest $args
     * @return CreateRecommenderResponse
     */
    public function createRecommender(CreateRecommenderRequest $args)
    {
        $result = parent::createRecommender($args->toArray());
        return new CreateRecommenderResponse($result->toArray());
    }
}

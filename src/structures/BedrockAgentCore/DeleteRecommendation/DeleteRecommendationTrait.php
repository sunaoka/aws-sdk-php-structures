<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteRecommendation;

trait DeleteRecommendationTrait
{
    /**
     * @param DeleteRecommendationRequest $args
     * @return DeleteRecommendationResponse
     */
    public function deleteRecommendation(DeleteRecommendationRequest $args)
    {
        $result = parent::deleteRecommendation($args->toArray());
        return new DeleteRecommendationResponse($result->toArray());
    }
}

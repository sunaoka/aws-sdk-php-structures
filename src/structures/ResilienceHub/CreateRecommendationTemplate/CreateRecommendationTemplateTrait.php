<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateRecommendationTemplate;

trait CreateRecommendationTemplateTrait
{
    /**
     * @param CreateRecommendationTemplateRequest $args
     * @return CreateRecommendationTemplateResponse
     */
    public function createRecommendationTemplate(CreateRecommendationTemplateRequest $args)
    {
        $result = parent::createRecommendationTemplate($args->toArray());
        return new CreateRecommendationTemplateResponse($result->toArray());
    }
}

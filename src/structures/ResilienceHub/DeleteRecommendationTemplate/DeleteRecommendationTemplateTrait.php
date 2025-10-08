<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteRecommendationTemplate;

trait DeleteRecommendationTemplateTrait
{
    /**
     * @param DeleteRecommendationTemplateRequest $args
     * @return DeleteRecommendationTemplateResponse
     */
    public function deleteRecommendationTemplate(DeleteRecommendationTemplateRequest $args)
    {
        $result = parent::deleteRecommendationTemplate($args->toArray());
        return new DeleteRecommendationTemplateResponse($result->toArray());
    }
}

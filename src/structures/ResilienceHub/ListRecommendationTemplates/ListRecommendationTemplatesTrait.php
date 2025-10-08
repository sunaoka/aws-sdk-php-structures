<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListRecommendationTemplates;

trait ListRecommendationTemplatesTrait
{
    /**
     * @param ListRecommendationTemplatesRequest $args
     * @return ListRecommendationTemplatesResponse
     */
    public function listRecommendationTemplates(ListRecommendationTemplatesRequest $args)
    {
        $result = parent::listRecommendationTemplates($args->toArray());
        return new ListRecommendationTemplatesResponse($result->toArray());
    }
}

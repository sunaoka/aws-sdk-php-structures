<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplate;

trait GetReviewTemplateTrait
{
    /**
     * @param GetReviewTemplateRequest $args
     * @return GetReviewTemplateResponse
     */
    public function getReviewTemplate(GetReviewTemplateRequest $args)
    {
        $result = parent::getReviewTemplate($args->toArray());
        return new GetReviewTemplateResponse($result->toArray());
    }
}

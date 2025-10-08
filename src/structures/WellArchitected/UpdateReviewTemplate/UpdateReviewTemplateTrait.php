<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplate;

trait UpdateReviewTemplateTrait
{
    /**
     * @param UpdateReviewTemplateRequest $args
     * @return UpdateReviewTemplateResponse
     */
    public function updateReviewTemplate(UpdateReviewTemplateRequest $args)
    {
        $result = parent::updateReviewTemplate($args->toArray());
        return new UpdateReviewTemplateResponse($result->toArray());
    }
}

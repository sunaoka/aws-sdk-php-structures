<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateReviewTemplate;

trait CreateReviewTemplateTrait
{
    /**
     * @param CreateReviewTemplateRequest $args
     * @return CreateReviewTemplateResponse
     */
    public function createReviewTemplate(CreateReviewTemplateRequest $args)
    {
        $result = parent::createReviewTemplate($args->toArray());
        return new CreateReviewTemplateResponse($result->toArray());
    }
}

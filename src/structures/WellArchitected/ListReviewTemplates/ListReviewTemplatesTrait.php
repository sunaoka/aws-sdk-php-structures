<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListReviewTemplates;

trait ListReviewTemplatesTrait
{
    /**
     * @param ListReviewTemplatesRequest $args
     * @return ListReviewTemplatesResponse
     */
    public function listReviewTemplates(ListReviewTemplatesRequest $args)
    {
        $result = parent::listReviewTemplates($args->toArray());
        return new ListReviewTemplatesResponse($result->toArray());
    }
}

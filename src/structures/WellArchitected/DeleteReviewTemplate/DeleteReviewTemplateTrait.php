<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteReviewTemplate;

trait DeleteReviewTemplateTrait
{
    /**
     * @param DeleteReviewTemplateRequest $args
     * @return void
     */
    public function deleteReviewTemplate(DeleteReviewTemplateRequest $args)
    {
        parent::deleteReviewTemplate($args->toArray());
    }
}

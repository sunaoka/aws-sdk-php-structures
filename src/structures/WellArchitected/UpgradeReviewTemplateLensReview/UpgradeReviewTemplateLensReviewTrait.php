<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpgradeReviewTemplateLensReview;

trait UpgradeReviewTemplateLensReviewTrait
{
    /**
     * @param UpgradeReviewTemplateLensReviewRequest $args
     * @return void
     */
    public function upgradeReviewTemplateLensReview(UpgradeReviewTemplateLensReviewRequest $args)
    {
        parent::upgradeReviewTemplateLensReview($args->toArray());
    }
}

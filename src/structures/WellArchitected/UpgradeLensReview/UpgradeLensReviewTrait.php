<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpgradeLensReview;

trait UpgradeLensReviewTrait
{
    /**
     * @param UpgradeLensReviewRequest $args
     * @return void
     */
    public function upgradeLensReview(UpgradeLensReviewRequest $args)
    {
        parent::upgradeLensReview($args->toArray());
    }
}

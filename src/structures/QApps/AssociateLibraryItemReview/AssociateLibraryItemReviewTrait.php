<?php

namespace Sunaoka\Aws\Structures\QApps\AssociateLibraryItemReview;

trait AssociateLibraryItemReviewTrait
{
    /**
     * @param AssociateLibraryItemReviewRequest $args
     * @return void
     */
    public function associateLibraryItemReview(AssociateLibraryItemReviewRequest $args)
    {
        parent::associateLibraryItemReview($args->toArray());
    }
}

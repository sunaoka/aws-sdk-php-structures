<?php

namespace Sunaoka\Aws\Structures\QApps\DisassociateLibraryItemReview;

trait DisassociateLibraryItemReviewTrait
{
    /**
     * @param DisassociateLibraryItemReviewRequest $args
     * @return void
     */
    public function disassociateLibraryItemReview(DisassociateLibraryItemReviewRequest $args)
    {
        parent::disassociateLibraryItemReview($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviewImprovements;

trait ListLensReviewImprovementsTrait
{
    /**
     * @param ListLensReviewImprovementsRequest $args
     * @return ListLensReviewImprovementsResponse
     */
    public function listLensReviewImprovements(ListLensReviewImprovementsRequest $args)
    {
        $result = parent::listLensReviewImprovements($args->toArray());
        return new ListLensReviewImprovementsResponse($result->toArray());
    }
}

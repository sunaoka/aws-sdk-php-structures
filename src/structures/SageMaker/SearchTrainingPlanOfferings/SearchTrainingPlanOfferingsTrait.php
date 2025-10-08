<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings;

trait SearchTrainingPlanOfferingsTrait
{
    /**
     * @param SearchTrainingPlanOfferingsRequest $args
     * @return SearchTrainingPlanOfferingsResponse
     */
    public function searchTrainingPlanOfferings(SearchTrainingPlanOfferingsRequest $args)
    {
        $result = parent::searchTrainingPlanOfferings($args->toArray());
        return new SearchTrainingPlanOfferingsResponse($result->toArray());
    }
}

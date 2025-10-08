<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSagemakerServicecatalogPortfolioStatus;

trait GetSagemakerServicecatalogPortfolioStatusTrait
{
    /**
     * @param GetSagemakerServicecatalogPortfolioStatusRequest $args
     * @return GetSagemakerServicecatalogPortfolioStatusResponse
     */
    public function getSagemakerServicecatalogPortfolioStatus(GetSagemakerServicecatalogPortfolioStatusRequest $args)
    {
        $result = parent::getSagemakerServicecatalogPortfolioStatus($args->toArray());
        return new GetSagemakerServicecatalogPortfolioStatusResponse($result->toArray());
    }
}

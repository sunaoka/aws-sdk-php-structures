<?php

namespace Sunaoka\Aws\Structures\SageMaker\EnableSagemakerServicecatalogPortfolio;

trait EnableSagemakerServicecatalogPortfolioTrait
{
    /**
     * @param EnableSagemakerServicecatalogPortfolioRequest $args
     * @return EnableSagemakerServicecatalogPortfolioResponse
     */
    public function enableSagemakerServicecatalogPortfolio(EnableSagemakerServicecatalogPortfolioRequest $args)
    {
        $result = parent::enableSagemakerServicecatalogPortfolio($args->toArray());
        return new EnableSagemakerServicecatalogPortfolioResponse($result->toArray());
    }
}

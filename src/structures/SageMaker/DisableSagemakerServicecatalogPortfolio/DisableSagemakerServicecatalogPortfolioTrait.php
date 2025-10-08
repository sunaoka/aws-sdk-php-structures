<?php

namespace Sunaoka\Aws\Structures\SageMaker\DisableSagemakerServicecatalogPortfolio;

trait DisableSagemakerServicecatalogPortfolioTrait
{
    /**
     * @param DisableSagemakerServicecatalogPortfolioRequest $args
     * @return DisableSagemakerServicecatalogPortfolioResponse
     */
    public function disableSagemakerServicecatalogPortfolio(DisableSagemakerServicecatalogPortfolioRequest $args)
    {
        $result = parent::disableSagemakerServicecatalogPortfolio($args->toArray());
        return new DisableSagemakerServicecatalogPortfolioResponse($result->toArray());
    }
}

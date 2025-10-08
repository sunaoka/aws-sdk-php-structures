<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeletePortfolio;

trait DeletePortfolioTrait
{
    /**
     * @param DeletePortfolioRequest $args
     * @return DeletePortfolioResponse
     */
    public function deletePortfolio(DeletePortfolioRequest $args)
    {
        $result = parent::deletePortfolio($args->toArray());
        return new DeletePortfolioResponse($result->toArray());
    }
}

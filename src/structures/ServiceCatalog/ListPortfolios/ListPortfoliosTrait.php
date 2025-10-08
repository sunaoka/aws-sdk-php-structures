<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfolios;

trait ListPortfoliosTrait
{
    /**
     * @param ListPortfoliosRequest $args
     * @return ListPortfoliosResponse
     */
    public function listPortfolios(ListPortfoliosRequest $args)
    {
        $result = parent::listPortfolios($args->toArray());
        return new ListPortfoliosResponse($result->toArray());
    }
}

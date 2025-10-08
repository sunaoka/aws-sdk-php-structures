<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreatePortfolioShare;

trait CreatePortfolioShareTrait
{
    /**
     * @param CreatePortfolioShareRequest $args
     * @return CreatePortfolioShareResponse
     */
    public function createPortfolioShare(CreatePortfolioShareRequest $args)
    {
        $result = parent::createPortfolioShare($args->toArray());
        return new CreatePortfolioShareResponse($result->toArray());
    }
}

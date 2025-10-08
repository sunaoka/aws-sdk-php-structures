<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AcceptPortfolioShare;

trait AcceptPortfolioShareTrait
{
    /**
     * @param AcceptPortfolioShareRequest $args
     * @return AcceptPortfolioShareResponse
     */
    public function acceptPortfolioShare(AcceptPortfolioShareRequest $args)
    {
        $result = parent::acceptPortfolioShare($args->toArray());
        return new AcceptPortfolioShareResponse($result->toArray());
    }
}

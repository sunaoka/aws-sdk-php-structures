<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\RejectPortfolioShare;

trait RejectPortfolioShareTrait
{
    /**
     * @param RejectPortfolioShareRequest $args
     * @return RejectPortfolioShareResponse
     */
    public function rejectPortfolioShare(RejectPortfolioShareRequest $args)
    {
        $result = parent::rejectPortfolioShare($args->toArray());
        return new RejectPortfolioShareResponse($result->toArray());
    }
}

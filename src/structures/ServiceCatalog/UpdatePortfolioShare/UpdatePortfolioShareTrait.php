<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdatePortfolioShare;

trait UpdatePortfolioShareTrait
{
    /**
     * @param UpdatePortfolioShareRequest $args
     * @return UpdatePortfolioShareResponse
     */
    public function updatePortfolioShare(UpdatePortfolioShareRequest $args)
    {
        $result = parent::updatePortfolioShare($args->toArray());
        return new UpdatePortfolioShareResponse($result->toArray());
    }
}

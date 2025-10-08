<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeletePortfolioShare;

trait DeletePortfolioShareTrait
{
    /**
     * @param DeletePortfolioShareRequest $args
     * @return DeletePortfolioShareResponse
     */
    public function deletePortfolioShare(DeletePortfolioShareRequest $args)
    {
        $result = parent::deletePortfolioShare($args->toArray());
        return new DeletePortfolioShareResponse($result->toArray());
    }
}

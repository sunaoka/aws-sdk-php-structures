<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListTemplateShares;

trait ListTemplateSharesTrait
{
    /**
     * @param ListTemplateSharesRequest $args
     * @return ListTemplateSharesResponse
     */
    public function listTemplateShares(ListTemplateSharesRequest $args)
    {
        $result = parent::listTemplateShares($args->toArray());
        return new ListTemplateSharesResponse($result->toArray());
    }
}

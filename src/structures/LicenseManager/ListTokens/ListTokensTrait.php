<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListTokens;

trait ListTokensTrait
{
    /**
     * @param ListTokensRequest $args
     * @return ListTokensResponse
     */
    public function listTokens(ListTokensRequest $args)
    {
        $result = parent::listTokens($args->toArray());
        return new ListTokensResponse($result->toArray());
    }
}

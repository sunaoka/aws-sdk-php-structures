<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeDataShare;

trait AuthorizeDataShareTrait
{
    /**
     * @param AuthorizeDataShareRequest $args
     * @return AuthorizeDataShareResponse
     */
    public function authorizeDataShare(AuthorizeDataShareRequest $args)
    {
        $result = parent::authorizeDataShare($args->toArray());
        return new AuthorizeDataShareResponse($result->toArray());
    }
}

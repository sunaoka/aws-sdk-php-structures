<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuthorizers;

trait ListAuthorizersTrait
{
    /**
     * @param ListAuthorizersRequest $args
     * @return ListAuthorizersResponse
     */
    public function listAuthorizers(ListAuthorizersRequest $args)
    {
        $result = parent::listAuthorizers($args->toArray());
        return new ListAuthorizersResponse($result->toArray());
    }
}

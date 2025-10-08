<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteAuthorizer;

trait DeleteAuthorizerTrait
{
    /**
     * @param DeleteAuthorizerRequest $args
     * @return DeleteAuthorizerResponse
     */
    public function deleteAuthorizer(DeleteAuthorizerRequest $args)
    {
        $result = parent::deleteAuthorizer($args->toArray());
        return new DeleteAuthorizerResponse($result->toArray());
    }
}

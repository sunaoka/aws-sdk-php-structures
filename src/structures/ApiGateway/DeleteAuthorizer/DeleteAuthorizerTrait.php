<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteAuthorizer;

trait DeleteAuthorizerTrait
{
    /**
     * @param DeleteAuthorizerRequest $args
     * @return void
     */
    public function deleteAuthorizer(DeleteAuthorizerRequest $args)
    {
        parent::deleteAuthorizer($args->toArray());
    }
}

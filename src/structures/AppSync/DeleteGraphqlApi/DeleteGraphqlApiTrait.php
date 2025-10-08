<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteGraphqlApi;

trait DeleteGraphqlApiTrait
{
    /**
     * @param DeleteGraphqlApiRequest $args
     * @return DeleteGraphqlApiResponse
     */
    public function deleteGraphqlApi(DeleteGraphqlApiRequest $args)
    {
        $result = parent::deleteGraphqlApi($args->toArray());
        return new DeleteGraphqlApiResponse($result->toArray());
    }
}

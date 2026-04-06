<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteApi;

trait DeleteApiTrait
{
    /**
     * @param DeleteApiRequest $args
     * @return DeleteApiResponse
     */
    public function deleteApi(DeleteApiRequest $args)
    {
        $result = parent::deleteApi($args->toArray());
        return new DeleteApiResponse($result->toArray());
    }
}

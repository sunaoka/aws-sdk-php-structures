<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateRestApi;

trait UpdateRestApiTrait
{
    /**
     * @param UpdateRestApiRequest $args
     * @return UpdateRestApiResponse
     */
    public function updateRestApi(UpdateRestApiRequest $args)
    {
        $result = parent::updateRestApi($args->toArray());
        return new UpdateRestApiResponse($result->toArray());
    }
}

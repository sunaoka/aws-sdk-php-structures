<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateGraphqlApi;

trait UpdateGraphqlApiTrait
{
    /**
     * @param UpdateGraphqlApiRequest $args
     * @return UpdateGraphqlApiResponse
     */
    public function updateGraphqlApi(UpdateGraphqlApiRequest $args)
    {
        $result = parent::updateGraphqlApi($args->toArray());
        return new UpdateGraphqlApiResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApi;

trait UpdateApiTrait
{
    /**
     * @param UpdateApiRequest $args
     * @return UpdateApiResponse
     */
    public function updateApi(UpdateApiRequest $args)
    {
        $result = parent::updateApi($args->toArray());
        return new UpdateApiResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\MWAA\InvokeRestApi;

trait InvokeRestApiTrait
{
    /**
     * @param InvokeRestApiRequest $args
     * @return InvokeRestApiResponse
     */
    public function invokeRestApi(InvokeRestApiRequest $args)
    {
        $result = parent::invokeRestApi($args->toArray());
        return new InvokeRestApiResponse($result->toArray());
    }
}

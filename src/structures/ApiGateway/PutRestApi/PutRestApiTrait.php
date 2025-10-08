<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutRestApi;

trait PutRestApiTrait
{
    /**
     * @param PutRestApiRequest $args
     * @return PutRestApiResponse
     */
    public function putRestApi(PutRestApiRequest $args)
    {
        $result = parent::putRestApi($args->toArray());
        return new PutRestApiResponse($result->toArray());
    }
}

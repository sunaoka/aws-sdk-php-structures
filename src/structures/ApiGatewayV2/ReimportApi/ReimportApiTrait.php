<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ReimportApi;

trait ReimportApiTrait
{
    /**
     * @param ReimportApiRequest $args
     * @return ReimportApiResponse
     */
    public function reimportApi(ReimportApiRequest $args)
    {
        $result = parent::reimportApi($args->toArray());
        return new ReimportApiResponse($result->toArray());
    }
}

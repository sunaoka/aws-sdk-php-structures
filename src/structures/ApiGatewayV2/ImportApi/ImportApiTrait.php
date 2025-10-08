<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ImportApi;

trait ImportApiTrait
{
    /**
     * @param ImportApiRequest $args
     * @return ImportApiResponse
     */
    public function importApi(ImportApiRequest $args)
    {
        $result = parent::importApi($args->toArray());
        return new ImportApiResponse($result->toArray());
    }
}

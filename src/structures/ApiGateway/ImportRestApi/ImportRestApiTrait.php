<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportRestApi;

trait ImportRestApiTrait
{
    /**
     * @param ImportRestApiRequest $args
     * @return ImportRestApiResponse
     */
    public function importRestApi(ImportRestApiRequest $args)
    {
        $result = parent::importRestApi($args->toArray());
        return new ImportRestApiResponse($result->toArray());
    }
}

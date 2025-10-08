<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportApiKeys;

trait ImportApiKeysTrait
{
    /**
     * @param ImportApiKeysRequest $args
     * @return ImportApiKeysResponse
     */
    public function importApiKeys(ImportApiKeysRequest $args)
    {
        $result = parent::importApiKeys($args->toArray());
        return new ImportApiKeysResponse($result->toArray());
    }
}

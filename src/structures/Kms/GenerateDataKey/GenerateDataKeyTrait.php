<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKey;

trait GenerateDataKeyTrait
{
    /**
     * @param GenerateDataKeyRequest $args
     * @return GenerateDataKeyResponse
     */
    public function generateDataKey(GenerateDataKeyRequest $args)
    {
        $result = parent::generateDataKey($args->toArray());
        return new GenerateDataKeyResponse($result->toArray());
    }
}

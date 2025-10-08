<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyPair;

trait GenerateDataKeyPairTrait
{
    /**
     * @param GenerateDataKeyPairRequest $args
     * @return GenerateDataKeyPairResponse
     */
    public function generateDataKeyPair(GenerateDataKeyPairRequest $args)
    {
        $result = parent::generateDataKeyPair($args->toArray());
        return new GenerateDataKeyPairResponse($result->toArray());
    }
}

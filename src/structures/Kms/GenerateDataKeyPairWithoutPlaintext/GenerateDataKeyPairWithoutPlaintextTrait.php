<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyPairWithoutPlaintext;

trait GenerateDataKeyPairWithoutPlaintextTrait
{
    /**
     * @param GenerateDataKeyPairWithoutPlaintextRequest $args
     * @return GenerateDataKeyPairWithoutPlaintextResponse
     */
    public function generateDataKeyPairWithoutPlaintext(GenerateDataKeyPairWithoutPlaintextRequest $args)
    {
        $result = parent::generateDataKeyPairWithoutPlaintext($args->toArray());
        return new GenerateDataKeyPairWithoutPlaintextResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyWithoutPlaintext;

trait GenerateDataKeyWithoutPlaintextTrait
{
    /**
     * @param GenerateDataKeyWithoutPlaintextRequest $args
     * @return GenerateDataKeyWithoutPlaintextResponse
     */
    public function generateDataKeyWithoutPlaintext(GenerateDataKeyWithoutPlaintextRequest $args)
    {
        $result = parent::generateDataKeyWithoutPlaintext($args->toArray());
        return new GenerateDataKeyWithoutPlaintextResponse($result->toArray());
    }
}

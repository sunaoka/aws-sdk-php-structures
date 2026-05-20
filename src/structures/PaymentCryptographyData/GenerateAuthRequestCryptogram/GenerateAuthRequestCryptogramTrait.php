<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateAuthRequestCryptogram;

trait GenerateAuthRequestCryptogramTrait
{
    /**
     * @param GenerateAuthRequestCryptogramRequest $args
     * @return GenerateAuthRequestCryptogramResponse
     */
    public function generateAuthRequestCryptogram(GenerateAuthRequestCryptogramRequest $args)
    {
        $result = parent::generateAuthRequestCryptogram($args->toArray());
        return new GenerateAuthRequestCryptogramResponse($result->toArray());
    }
}

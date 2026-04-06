<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateAs2805KekValidation;

trait GenerateAs2805KekValidationTrait
{
    /**
     * @param GenerateAs2805KekValidationRequest $args
     * @return GenerateAs2805KekValidationResponse
     */
    public function generateAs2805KekValidation(GenerateAs2805KekValidationRequest $args)
    {
        $result = parent::generateAs2805KekValidation($args->toArray());
        return new GenerateAs2805KekValidationResponse($result->toArray());
    }
}

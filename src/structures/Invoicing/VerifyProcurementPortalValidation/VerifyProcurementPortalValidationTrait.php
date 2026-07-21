<?php

namespace Sunaoka\Aws\Structures\Invoicing\VerifyProcurementPortalValidation;

trait VerifyProcurementPortalValidationTrait
{
    /**
     * @param VerifyProcurementPortalValidationRequest $args
     * @return VerifyProcurementPortalValidationResponse
     */
    public function verifyProcurementPortalValidation(VerifyProcurementPortalValidationRequest $args)
    {
        $result = parent::verifyProcurementPortalValidation($args->toArray());
        return new VerifyProcurementPortalValidationResponse($result->toArray());
    }
}

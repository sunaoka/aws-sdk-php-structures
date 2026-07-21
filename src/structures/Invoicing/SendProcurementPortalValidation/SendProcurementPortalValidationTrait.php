<?php

namespace Sunaoka\Aws\Structures\Invoicing\SendProcurementPortalValidation;

trait SendProcurementPortalValidationTrait
{
    /**
     * @param SendProcurementPortalValidationRequest $args
     * @return SendProcurementPortalValidationResponse
     */
    public function sendProcurementPortalValidation(SendProcurementPortalValidationRequest $args)
    {
        $result = parent::sendProcurementPortalValidation($args->toArray());
        return new SendProcurementPortalValidationResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistrationDocument;

trait GetTaxRegistrationDocumentTrait
{
    /**
     * @param GetTaxRegistrationDocumentRequest $args
     * @return GetTaxRegistrationDocumentResponse
     */
    public function getTaxRegistrationDocument(GetTaxRegistrationDocumentRequest $args)
    {
        $result = parent::getTaxRegistrationDocument($args->toArray());
        return new GetTaxRegistrationDocumentResponse($result->toArray());
    }
}

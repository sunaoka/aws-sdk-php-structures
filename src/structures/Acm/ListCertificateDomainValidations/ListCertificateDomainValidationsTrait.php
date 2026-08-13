<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificateDomainValidations;

trait ListCertificateDomainValidationsTrait
{
    /**
     * @param ListCertificateDomainValidationsRequest $args
     * @return ListCertificateDomainValidationsResponse
     */
    public function listCertificateDomainValidations(ListCertificateDomainValidationsRequest $args)
    {
        $result = parent::listCertificateDomainValidations($args->toArray());
        return new ListCertificateDomainValidationsResponse($result->toArray());
    }
}

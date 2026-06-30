<?php

namespace Sunaoka\Aws\Structures\Acm\ListAcmeDomainValidations;

trait ListAcmeDomainValidationsTrait
{
    /**
     * @param ListAcmeDomainValidationsRequest $args
     * @return ListAcmeDomainValidationsResponse
     */
    public function listAcmeDomainValidations(ListAcmeDomainValidationsRequest $args)
    {
        $result = parent::listAcmeDomainValidations($args->toArray());
        return new ListAcmeDomainValidationsResponse($result->toArray());
    }
}

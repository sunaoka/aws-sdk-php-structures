<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeDomainValidation;

trait CreateAcmeDomainValidationTrait
{
    /**
     * @param CreateAcmeDomainValidationRequest $args
     * @return CreateAcmeDomainValidationResponse
     */
    public function createAcmeDomainValidation(CreateAcmeDomainValidationRequest $args)
    {
        $result = parent::createAcmeDomainValidation($args->toArray());
        return new CreateAcmeDomainValidationResponse($result->toArray());
    }
}

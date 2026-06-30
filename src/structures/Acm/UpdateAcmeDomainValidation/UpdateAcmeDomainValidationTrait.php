<?php

namespace Sunaoka\Aws\Structures\Acm\UpdateAcmeDomainValidation;

trait UpdateAcmeDomainValidationTrait
{
    /**
     * @param UpdateAcmeDomainValidationRequest $args
     * @return void
     */
    public function updateAcmeDomainValidation(UpdateAcmeDomainValidationRequest $args)
    {
        parent::updateAcmeDomainValidation($args->toArray());
    }
}

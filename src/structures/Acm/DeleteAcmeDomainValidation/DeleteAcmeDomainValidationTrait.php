<?php

namespace Sunaoka\Aws\Structures\Acm\DeleteAcmeDomainValidation;

trait DeleteAcmeDomainValidationTrait
{
    /**
     * @param DeleteAcmeDomainValidationRequest $args
     * @return void
     */
    public function deleteAcmeDomainValidation(DeleteAcmeDomainValidationRequest $args)
    {
        parent::deleteAcmeDomainValidation($args->toArray());
    }
}

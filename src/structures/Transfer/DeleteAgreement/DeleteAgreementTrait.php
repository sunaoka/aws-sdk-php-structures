<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteAgreement;

trait DeleteAgreementTrait
{
    /**
     * @param DeleteAgreementRequest $args
     * @return void
     */
    public function deleteAgreement(DeleteAgreementRequest $args)
    {
        parent::deleteAgreement($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateAgreement;

trait UpdateAgreementTrait
{
    /**
     * @param UpdateAgreementRequest $args
     * @return UpdateAgreementResponse
     */
    public function updateAgreement(UpdateAgreementRequest $args)
    {
        $result = parent::updateAgreement($args->toArray());
        return new UpdateAgreementResponse($result->toArray());
    }
}

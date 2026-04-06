<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteFoundationModelAgreement;

trait DeleteFoundationModelAgreementTrait
{
    /**
     * @param DeleteFoundationModelAgreementRequest $args
     * @return DeleteFoundationModelAgreementResponse
     */
    public function deleteFoundationModelAgreement(DeleteFoundationModelAgreementRequest $args)
    {
        $result = parent::deleteFoundationModelAgreement($args->toArray());
        return new DeleteFoundationModelAgreementResponse($result->toArray());
    }
}

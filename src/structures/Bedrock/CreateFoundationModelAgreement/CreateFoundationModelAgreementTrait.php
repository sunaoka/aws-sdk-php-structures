<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateFoundationModelAgreement;

trait CreateFoundationModelAgreementTrait
{
    /**
     * @param CreateFoundationModelAgreementRequest $args
     * @return CreateFoundationModelAgreementResponse
     */
    public function createFoundationModelAgreement(CreateFoundationModelAgreementRequest $args)
    {
        $result = parent::createFoundationModelAgreement($args->toArray());
        return new CreateFoundationModelAgreementResponse($result->toArray());
    }
}

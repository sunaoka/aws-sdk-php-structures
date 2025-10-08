<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateAgreement;

trait CreateAgreementTrait
{
    /**
     * @param CreateAgreementRequest $args
     * @return CreateAgreementResponse
     */
    public function createAgreement(CreateAgreementRequest $args)
    {
        $result = parent::createAgreement($args->toArray());
        return new CreateAgreementResponse($result->toArray());
    }
}

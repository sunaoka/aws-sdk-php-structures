<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDefaultCreditSpecification;

trait GetDefaultCreditSpecificationTrait
{
    /**
     * @param GetDefaultCreditSpecificationRequest $args
     * @return GetDefaultCreditSpecificationResponse
     */
    public function getDefaultCreditSpecification(GetDefaultCreditSpecificationRequest $args)
    {
        $result = parent::getDefaultCreditSpecification($args->toArray());
        return new GetDefaultCreditSpecificationResponse($result->toArray());
    }
}

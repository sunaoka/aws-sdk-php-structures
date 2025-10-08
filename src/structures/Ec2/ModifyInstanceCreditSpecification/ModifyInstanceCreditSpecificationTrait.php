<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCreditSpecification;

trait ModifyInstanceCreditSpecificationTrait
{
    /**
     * @param ModifyInstanceCreditSpecificationRequest $args
     * @return ModifyInstanceCreditSpecificationResponse
     */
    public function modifyInstanceCreditSpecification(ModifyInstanceCreditSpecificationRequest $args)
    {
        $result = parent::modifyInstanceCreditSpecification($args->toArray());
        return new ModifyInstanceCreditSpecificationResponse($result->toArray());
    }
}

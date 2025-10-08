<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyDefaultCreditSpecification;

trait ModifyDefaultCreditSpecificationTrait
{
    /**
     * @param ModifyDefaultCreditSpecificationRequest $args
     * @return ModifyDefaultCreditSpecificationResponse
     */
    public function modifyDefaultCreditSpecification(ModifyDefaultCreditSpecificationRequest $args)
    {
        $result = parent::modifyDefaultCreditSpecification($args->toArray());
        return new ModifyDefaultCreditSpecificationResponse($result->toArray());
    }
}

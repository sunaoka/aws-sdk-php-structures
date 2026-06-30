<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeDomainValidation;

trait DescribeAcmeDomainValidationTrait
{
    /**
     * @param DescribeAcmeDomainValidationRequest $args
     * @return DescribeAcmeDomainValidationResponse
     */
    public function describeAcmeDomainValidation(DescribeAcmeDomainValidationRequest $args)
    {
        $result = parent::describeAcmeDomainValidation($args->toArray());
        return new DescribeAcmeDomainValidationResponse($result->toArray());
    }
}

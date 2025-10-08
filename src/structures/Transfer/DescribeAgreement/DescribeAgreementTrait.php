<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAgreement;

trait DescribeAgreementTrait
{
    /**
     * @param DescribeAgreementRequest $args
     * @return DescribeAgreementResponse
     */
    public function describeAgreement(DescribeAgreementRequest $args)
    {
        $result = parent::describeAgreement($args->toArray());
        return new DescribeAgreementResponse($result->toArray());
    }
}

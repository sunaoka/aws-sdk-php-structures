<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeExternalAccountBinding;

trait DescribeAcmeExternalAccountBindingTrait
{
    /**
     * @param DescribeAcmeExternalAccountBindingRequest $args
     * @return DescribeAcmeExternalAccountBindingResponse
     */
    public function describeAcmeExternalAccountBinding(DescribeAcmeExternalAccountBindingRequest $args)
    {
        $result = parent::describeAcmeExternalAccountBinding($args->toArray());
        return new DescribeAcmeExternalAccountBindingResponse($result->toArray());
    }
}

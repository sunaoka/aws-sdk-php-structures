<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp;

trait DescribePartnerAppTrait
{
    /**
     * @param DescribePartnerAppRequest $args
     * @return DescribePartnerAppResponse
     */
    public function describePartnerApp(DescribePartnerAppRequest $args)
    {
        $result = parent::describePartnerApp($args->toArray());
        return new DescribePartnerAppResponse($result->toArray());
    }
}

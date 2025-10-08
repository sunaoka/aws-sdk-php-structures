<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeService;

trait DescribeServiceTrait
{
    /**
     * @param DescribeServiceRequest $args
     * @return DescribeServiceResponse
     */
    public function describeService(DescribeServiceRequest $args)
    {
        $result = parent::describeService($args->toArray());
        return new DescribeServiceResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeConfigurationSet;

trait DescribeConfigurationSetTrait
{
    /**
     * @param DescribeConfigurationSetRequest $args
     * @return DescribeConfigurationSetResponse
     */
    public function describeConfigurationSet(DescribeConfigurationSetRequest $args)
    {
        $result = parent::describeConfigurationSet($args->toArray());
        return new DescribeConfigurationSetResponse($result->toArray());
    }
}

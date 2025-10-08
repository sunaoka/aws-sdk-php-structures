<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeConfigurationRevision;

trait DescribeConfigurationRevisionTrait
{
    /**
     * @param DescribeConfigurationRevisionRequest $args
     * @return DescribeConfigurationRevisionResponse
     */
    public function describeConfigurationRevision(DescribeConfigurationRevisionRequest $args)
    {
        $result = parent::describeConfigurationRevision($args->toArray());
        return new DescribeConfigurationRevisionResponse($result->toArray());
    }
}

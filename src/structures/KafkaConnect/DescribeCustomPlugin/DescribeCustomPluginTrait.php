<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeCustomPlugin;

trait DescribeCustomPluginTrait
{
    /**
     * @param DescribeCustomPluginRequest $args
     * @return DescribeCustomPluginResponse
     */
    public function describeCustomPlugin(DescribeCustomPluginRequest $args)
    {
        $result = parent::describeCustomPlugin($args->toArray());
        return new DescribeCustomPluginResponse($result->toArray());
    }
}

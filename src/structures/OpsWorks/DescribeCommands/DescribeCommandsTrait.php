<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeCommands;

trait DescribeCommandsTrait
{
    /**
     * @param DescribeCommandsRequest $args
     * @return DescribeCommandsResponse
     */
    public function describeCommands(DescribeCommandsRequest $args)
    {
        $result = parent::describeCommands($args->toArray());
        return new DescribeCommandsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeMapRun;

trait DescribeMapRunTrait
{
    /**
     * @param DescribeMapRunRequest $args
     * @return DescribeMapRunResponse
     */
    public function describeMapRun(DescribeMapRunRequest $args)
    {
        $result = parent::describeMapRun($args->toArray());
        return new DescribeMapRunResponse($result->toArray());
    }
}
